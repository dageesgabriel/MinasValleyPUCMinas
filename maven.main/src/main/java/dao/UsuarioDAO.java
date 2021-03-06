package dao;

import java.sql.*;

import model.Usuario;

public class UsuarioDAO {
	private Connection conexao;
	private int maxId = 0;
	
	public UsuarioDAO() {
		conexao = null;
	}
	
	public boolean conectar() {
		String driverName = "org.postgresql.Driver";                    
		String serverName = "localhost";
		String mydatabase = "MinasValley";
		int porta = 5432;
		String url = "jdbc:postgresql://" + serverName + ":" + porta +"/" + mydatabase;
		String username = "ti2cc";
		String password = "ti@cc";
		boolean status = false;

		try {
			Class.forName(driverName);
			conexao = DriverManager.getConnection(url, username, password);
			status = (conexao == null);
			System.out.println("Conexao efetuada com o postgres!");
		} catch (ClassNotFoundException e) { 
			System.err.println("Conexao nao efetuada com o postgres -- Driver nao encontrado -- " + e.getMessage());
		} catch (SQLException e) {
			System.err.println("Conexao nao efetuada com o postgres -- " + e.getMessage());
		}

		return status;
	}
	
	public boolean close() {
		boolean status = false;
		
		try {
			conexao.close();
			status = true;
		} catch (SQLException e) {
			System.err.println(e.getMessage());
		}
		return status;
	}
	
	public int getMaxId() {
		return maxId;
	}
	
	public boolean inserirUsuario(Usuario usuario) {
		boolean status = false;
		try {  
			Statement st = conexao.createStatement();
			this.maxId = (usuario.getId() > this.maxId) ? usuario.getId() : this.maxId;
			st.executeUpdate("INSERT INTO Usuario (Id, DataNascimento, Nome, Email, Senha, IdCadastro "
					       + "VALUES ("+usuario.getId()+ ", '" + usuario.getDataNascimento() + "', '"  
					       + usuario.getNome() + "', '" + usuario.getEmail() + ", '" + usuario.getSenha() + "');"); 
					       //+ ", '" + usuario.getIdCadastro + "');");
			st.close();
			status = true;
		} catch (SQLException u) {  
			throw new RuntimeException(u);
		}
		return status;	
	}
	
	public boolean atualizarUsuario(Usuario usuario) {
		boolean status = false;
		try {  
			Statement st = conexao.createStatement();
			String sql = "UPDATE Usuario SET DataNascimento = '" + usuario.getDataNascimento() + "', Nome = '"  
				       + usuario.getNome() + "', Email = '" + usuario.getEmail() + "', Senha = '"  
					   + usuario.getSenha() + "', IdCadastro = '" + usuario.getIdCadastro() + "'"
					   + " WHERE Id = " + usuario.getId();
			st.executeUpdate(sql);
			st.close();
			status = true;
		} catch (SQLException u) {  
			throw new RuntimeException(u);
		}
		return status;
	}
	
	public boolean excluirUsuario(String nome) {
		boolean status = false;
		try {  
			Statement st = conexao.createStatement();
			st.executeUpdate("DELETE FROM Usuario WHERE Nome = " + nome);
			st.close();
			status = true;
		} catch (SQLException u) {  
			throw new RuntimeException(u);
		}
		return status;
	}
	
	public Usuario getUsuario(String nome) {
		Usuario usuario;
		try {  
			Statement st = conexao.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			ResultSet rs = st.executeQuery("SELECT FROM Usuario WHERE Nome = " + nome);
			
			usuario = new Usuario(rs.getInt("id"), rs.getString("nome"), 
            rs.getString("email"), rs.getString("senha"), 
            rs.getDate("dataNascimento"), rs.getString("idCadastro"));
			
			st.close();
		} catch (SQLException u) {  
			throw new RuntimeException(u);
		}
		return usuario;
	}
	
	public Usuario[] getUsuarios() {
		Usuario[] usuarios = null;
		
		try {
			Statement st = conexao.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			ResultSet rs = st.executeQuery("SELECT * FROM Usuario");		
	         if(rs.next()){
	             rs.last();
	             usuarios = new Usuario[rs.getRow()];
	             rs.beforeFirst();

	             for(int i = 0; rs.next(); i++) {
	                usuarios[i] = new Usuario(rs.getInt("id"), rs.getString("nome"), 
	                		                  rs.getString("email"), rs.getString("senha"), 
	                		                  rs.getDate("dataNascimento"), rs.getString("idCadastro"));
	             }
	          }
	          st.close();
		} catch (Exception e) {
			System.err.println(e.getMessage());
		}
		return usuarios;
	}
	
	// Nao necessario no momento, se for preciso modificamos este metodo p/ alguma coisa no futuro
	/*public Usuario[] getUsuariosMasculinos() {
		Usuario[] usuarios = null;
		
		try {
			Statement st = conexao.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			ResultSet rs = st.executeQuery("SELECT * FROM Usuario WHERE Usuario.sexo LIKE 'M'");		
	         if(rs.next()){
	             rs.last();
	             usuarios = new Usuario[rs.getRow()];
	             rs.beforeFirst();

	             for(int i = 0; rs.next(); i++) {
	            	 usuarios[i] = new Usuario(rs.getInt("id"), rs.getString("nome"), 
   		                  					   rs.getString("email"), rs.getString("senha"), 
   		                  					   rs.getDate("dataNascimento"), rs.getString("idCadastro"));
	             }
	          }
	          st.close();
		} catch (Exception e) {
			System.err.println(e.getMessage());
		}
		return usuarios;
	} */
}