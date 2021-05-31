
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;

public  class  StartupDAO {	
	Connection conexao;
	 int maxId =  0 ;	
	public  void UsuarioDAO() {
		conexao = null ;}

public boolean conectar (  ) {
	Connection conexao;
	String driverName =  " org.postgresql.Driver " ;                    
	String serverName =  " localhost " ;
	String mydatabase =  " MinasValley " ;
	int Porta =  5432 ;
	String url =  " jdbc: postgresql: // "  + serverName +  " : "  + Porta + " / "  + mydatabase;
	String username =  " ogab " ;
	String senha =  " ogab " ;
	boolean status =  false ;

	try {
		Class.forName(driverName);
		conexao = DriverManager.getConnection(url, username, senha);		status = (conexao ==  null );
		System.out.println (" Conexao efetuada com o postgres! " );
	} catch ( ClassNotFoundException e) {
		System.err.println (" Conexao nao efetuada com o postgres - Driver nao encontrado - "  + e . getMessage ());
	} catch ( SQLException e) {
		System.err.println(" Conexao nao efetuada com o postgres - "  + e . getMessage ());
	}

	return status;
}

public  boolean  close () {
	boolean status =  false ;
	
	try {
		conexao.close();
		status =  true;
	} catch ( SQLException e) {
		System.err.println(e . getMessage ());
	}
	return status;
}

public  int  getMaxId () {
	return maxId;
}

public  boolean  inserirStartup (StartUp_Modelo startup) {
	boolean status =  false ;
	try {  
		Statement st = conexao. createStatement ();
		this.maxId = (startup.getId () >  this . maxId) ? startup. getId () : this.maxId;
		st . executeUpdate ( " INSERT INTO Startup (Id, Nome,Descrição, contato,  IdUsuario) "
				       +  " VALUES ( " + startup.getNome() +  " , ' "  + startup.getDescricao() +  " ', ' "  
				       + startup.getContato() +  " ',' "  + startup.getIdUsuario());
				       // + ", '" + usuario.getIdCadastro + "');");
		st.close();
		status =  true;
	} catch ( SQLException u) {  
		throw new RuntimeException(u);
	}
	return status ;	
}

@SuppressWarnings("unused")
private Object String () {

	return null;
}

public  boolean  atualizarStartup (StartUp_Modelo startup) {
	boolean status= false;
	try {  
		Statement st = conexao.createStatement();
		String sql =  " ATUALIZAR Startup SET contato = ' "  + startup.getContato()  +  " ', Nome =' "  
			       + startup.getNome() +  " ', Descrição =' "  + startup.getDescricao() +  " ', IdUsuario =' "  
				   + startup.getIdUsuario() +  " ' "
				   +  " WHERE Id = "  +startup.getId();
		st.executeUpdate(sql);
		st.close();
		status= true ;
	} catch ( SQLException u) {  
		throw new RuntimeException(u);	}
	return status;
}

public  boolean  excluirStarup ( String  nome ) {
	boolean status =  false;
	try {  
		Statement st = conexao.createStatement();
		st.executeUpdate(" DELETE FROM Startup WHERE Nome = "  + nome);
		st.close();
		status = true;
		
	} catch ( SQLException u) {  
		throw new RuntimeException(u);
	}
	return status;
}

public  StartUp_Modelo getStartup ( String  nome ) {
	StartUp_Modelo startup;
	try {  
		Statement st = conexao.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
		ResultSet rs = st . executeQuery ( " SELECT FROM Usuario WHERE Nome = "  + nome);
		
		startup =  new  StartUp_Modelo ();
		st . close();
		
	} catch ( SQLException u) {  
		throw new RuntimeException(u);
	}
	return startup;
}

public  StartupDAO[] getStartup () {
	StartupDAO [] startup =  null ;
	
	try {
		Statement st = conexao.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
		ResultSet rs = st . executeQuery ( " SELECT * FROM Startup " );		
         if (rs . next ()) {
             rs . last();
             startup =  new StartupDAO [rs . getRow ()];
             rs . beforeFirst ();

             for (int i= 0 ; rs . next (); i ++ ) {
                startup [i] = new StartupDAO ();
             }
          }
          st.close();
	} catch ( Exception e) {
		System.err.println(e.getMessage());
	}
	return startup;
}
}
