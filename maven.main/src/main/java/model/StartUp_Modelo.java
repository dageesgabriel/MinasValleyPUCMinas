 //modelo de embalagem ;

import  java.io.Serializable ;		
import  java.sql.Date ;
import  java.time.LocalDate ;
import  java.time.LocalDateTime ;

public  class  StartUp_Modelo   {
  private static  final  long serialVersionUID =  1L ;
	public  static  final  String  NOME_PADRAO  =  " nenhum " ;
	 final static public int MAX_VALIDACAO = 50 ;    
	 private int id ;
	private  String nome;
	private  String descricao;
	private  LocalDate contato;
	private  String idUsuario;
	
	public void Usuario(int id, String nome, String descricao, LocalDate contato, String idUsuario) {
		this.id = id;
		this.nome = nome;
		this.descricao = descricao;
		this.contato = contato;
		this.idUsuario = idUsuario;
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
		this.nome = nome;
	}

	public String getDescricao() {
		return descricao;
	}

	public void setDescricao(String descricao) {
		this.descricao = descricao;
	}

	public LocalDate getContato() {
		return contato;
	}

	public void setContato(LocalDate contato) {
		this.contato = contato;
	}

	public String getIdUsuario() {
		return idUsuario;
	}

	public void setIdUsuario(String idUsuario) {
		this.idUsuario = idUsuario;
	}

}