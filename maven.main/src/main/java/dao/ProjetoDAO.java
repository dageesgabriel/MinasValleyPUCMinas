package dao;

import java.sql.*;

import model.Projeto;

/**
 * Classe ProjetoDAO
 * 
 * @author Maria Eduarda
 *
 */

public class ProjetoDAO {
	private Connection conexao;
	private int maxId = 0;
	
	public ProjetoDAO() {
		conexao = null;
	}
	
	public boolean conectar() {
		String driverName = "org.postgresql.Driver";                    
		String serverName = "localhost";
		String mydatabase = "MinasValley";
		int porta = 5432;
		String url = "jdbc:postgresql://" + serverName + ":" + porta +"/" + mydatabase;
		String username = "ogab";
		String password = "ogab";
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
	
	public boolean inserirProjeto(Projeto Projeto) {
		boolean status = false;
		try {  
			Statement st = conexao.createStatement();
			st.executeUpdate("INSERT INTO Projeto (Id, idUsuario, Nome, Descricao, Contato) "
					       + "VALUES ("+Projeto.getId()+ ", '" + Projeto.getIdUsuario() + "', '"  
					       + Projeto.getNome() + "', '" + Projeto.getDescricao() + ", '" + Projeto.getContato() + "');"); 
			st.close();
			status = true;
		} catch (SQLException u) {  
			throw new RuntimeException(u);
		}
		return status;
	}

	public boolean atualizarProjeto(Projeto projeto) {
		boolean status = false;
		try {  
			Statement st = conexao.createStatement();
			String sql = "UPDATE Projeto SET Nome = '" + projeto.getNome() + "', Descricao = '" + projeto.getDescricao() 
					+ "', Contato = '"+ projeto.getContato();
			st.executeUpdate(sql);
			st.close();
			status = true;
		} catch (SQLException u) {  
			throw new RuntimeException(u);
		}
		return status;
	}
	
	public boolean excluirProjeto(int id) {
		boolean status = false;
		try {  
			Statement st = conexao.createStatement();
			st.executeUpdate("DELETE FROM Projeto WHERE id = " + id);
			st.close();
			status = true;
		} catch (SQLException u) {  
			throw new RuntimeException(u);
		}
		return status;
	}
	
	public Projeto getProjeto(int id) {
		Projeto projeto;
		try {  
			Statement st = conexao.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			ResultSet rs = st.executeQuery("SELECT FROM Projeto WHERE Id = " + id);
			
			projeto = new Projeto(rs.getInt("id"), rs.getInt("idUsuario"), 
            rs.getString("nome"), rs.getString("descricao"), rs.getDate("contato");
			
			st.close();
		} catch (SQLException u) {  
			throw new RuntimeException(u);
		}
		return projeto;
	}
	

	
	public Projeto[] getProjetos() {
		Projeto[] projetos = null;
		
		try {
			Statement st = conexao.createStatement(ResultSet.TYPE_SCROLL_INSENSITIVE,ResultSet.CONCUR_READ_ONLY);
			ResultSet rs = st.executeQuery("SELECT * FROM Projeto");		
	         if(rs.next()){
	             rs.last();
	             projetos = new Projeto[rs.getRow()];
	             rs.beforeFirst();

	             for(int i = 0; rs.next(); i++) {
	                projetos[i] = new Projeto(rs.getInt("id"), rs.getInt("idUsuario"), rs.getString("nome"), 
	                		                  rs.getString("descricao"), rs.getString("contato");
	             }
	          }
	          st.close();
		} catch (Exception e) {
			System.err.println(e.getMessage());
		}
		return projetos;
	}
	

}
