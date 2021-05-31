package model;

import java.io.Serializable;
import java.sql.Date;
import java.time.LocalDate;
import java.time.LocalDateTime;

public class Usuario implements Serializable {
	private static final long serialVersionUID = 1L;
	public static final String NOME_PADRAO = "none";
	public static final int MAX_VALIDACAO = 50;
	private int id;
	private String nome;
	private String email;
	private String senha;
	private LocalDate dataNascimento;
	private String idCadastro;
	
	public Usuario() {
		id = -1;
		nome = "none";
		email = "none";
		senha = "none";
		dataNascimento = LocalDate.now();
		idCadastro = "none";
	}

	public Usuario(int id, String nome, String email, String senha, LocalDate dataNascimento, String idCadastro) {
		setId(id);
		setNome(nome);
		setEmail(email);
		setSenha(senha);
		setDataNascimento(dataNascimento);
		setIdCadastro(idCadastro);
	}		
	
	public Usuario(int int1, String string, String string2, String string3, Date date, String string4) {
		// TODO Auto-generated constructor stub
	}

	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}
	
	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		if (nome.length() >= 3)
			this.nome = nome;
	}

	public String getEmail() {
		return email;
	}

	public void setEmail(String email) {
		if (email.length() >= 3)
			this.email = email;
	}

	public String getSenha() {
		return senha;
	}
	
	public void setSenha(String senha) {
		if (senha.length() >= 3)
			this.senha = senha;
	}
	
	public LocalDate getDataNascimento() {
		return dataNascimento;
	}

	public void setDataNascimento(LocalDate dataNascimento) {
		//if (getDataNascimento().isBefore(dataNascimento.atStartOfDay()))
			this.dataNascimento = dataNascimento;
	}

	public boolean emValidade() {
		return LocalDateTime.now().isBefore(this.getDataNascimento().atTime(23, 59));
	}
	
	public String getIdCadastro() {
		return idCadastro;
	}
	
	public void setIdCadastro(String idCadastro) {
		if (idCadastro.length() >= 3)
			this.idCadastro = idCadastro;
	}

	/**
	 * Método sobreposto da classe Object. É executado quando um objeto precisa
	 * ser exibido na forma de String.
	 */
	@Override
	public String toString() {
		return "Nome: " + nome + " Email: " + email + " Senha: " + senha + " Data de Nascimento: " + dataNascimento;
	}
	
	@Override
	public boolean equals(Object obj) {
		return (this.getId() == ((Usuario) obj).getId());
	}	
}