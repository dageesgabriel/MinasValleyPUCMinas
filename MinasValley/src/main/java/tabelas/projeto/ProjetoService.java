package service;


import java.time.LocalDate;

import dao.ProjetoDAO;

public class ProjetoService {
	
	public static void main(String[] args) {
		
		ProjetoDAO dao = new ProjetoDAO();
		
		dao.conectar();

		//Inserir um elemento na tabela
		Projeto projeto = new Projeto(11, 11, "pablo", "Startup A", "31  9888888");
		
		if(dao.inserirProjeto(projeto) == true) {
			System.out.println("Insercao com sucesso -> " + projeto.toString());
		}
		

		//Atualizar projetos
		projeto.setDescricao("Startup para xxx");
		dao.atualizarProjeto(projeto);

		//Mostrar projetos
		System.out.println("==== Mostrar projetos === ");
		projetos = dao.getProjetos();
		for(int i = 0; i < projetos.length; i++) {
			System.out.println(projetos[i].toString());
		}
		
		//Excluir projeto
		dao.excluirProjeto(projeto.getId());
		
		//Mostrar projetos
		projetos = dao.getProjetos();
		System.out.println("==== Mostrar projetos sem os ids=== ");		
		for(int i = 0; i < projetos.length; i++) {
			System.out.println(projetos[i].toString());
		}
		
		dao.close();
	}
}
}
