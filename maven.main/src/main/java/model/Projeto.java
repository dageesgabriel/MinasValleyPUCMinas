package model;
import java.io.Serializable;
import java.sql.Date;
import java.time.LocalDate;
import java.time.LocalDateTime;

/**
 * Classe Projeto
 * 
 * @author Maria Eduarda
 *
 */
public class Projeto implements Serializable {
	private static final long serialVersionUID = 1L;
	public static final String NOME_PADRAO = "none";
	public static final int MAX_VALIDACAO = 50;
	private int id;
	private int idUsuario
	private String nome;
	private String descricao;
	private String contato;
	
	public Projeto() {
		id = -1;
		idUsuario = -1;
		nome = "none";
		descricao = "none";
		contato = "none";
	}

	public Projeto(int id, int idUsuario, String nome, String descricao, String contato) {
		setId(id);
		setIdUsuario(idUsuario);
		setNome(nome);
		setEmail(descricao);
		setSenha(contato);
		setDataNascimento(dataNascimento);
		setIdCadastro(idCadastro);
	}		
	
	public Projeto(int int1, int int2, String string, String string2, String string3) {
		// TODO Auto-generated constructor stub
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}
	
	public int getIdUsuario() {
		return idUsuario;
	}

	public void setIdUsuario(int id) {
		this.idUsuario = id;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		if (nome.length() >= 3)
			this.nome = nome;
	}

	public String getDescricao() {
		return descricao;
	}

	public void setDescricao(String descricao) {
		if (descricao.length() >= 3)
			this.descricao = descricao;
	}

	public String getContato() {
		return contato;
	}
	
	public void setContato(String contato) {
		if (contato.length() >= 3)
			this.contato = contato;
	}

	/**
	 * Método sobreposto da classe Object. É executado quando um objeto precisa
	 * ser exibido na forma de String.
	 */
	@Override
	public String toString() {
		return "Nome: " + nome + " Descrição: " + descricao + " Contato: " + contato;
	}
	
	@Override
	public boolean equals(Object obj) {
		return (this.getId() == ((Projeto) obj).getId());
	}	
}
