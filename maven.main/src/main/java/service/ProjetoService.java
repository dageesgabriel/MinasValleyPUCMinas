package service;

import java.time.LocalDate;
import org.graalvm.compiler.core.GraalCompiler.Request;
import model.Startup;
import spark.Response;

import dao.ProjetoDAO;

/**
 * Classe ProjetoService
 * 
 * @author Maria Eduarda
 *
 */

public class ProjetoService {

	
		ProjetoDAO dao = new ProjetoDAO();
	
		private void ProjetoServiceConfig() {
			dao.conectar();
		}
	
		// Add an element to the table
		public Object add(Request request, Response response) {
			String nome = request.queryParams("nome");
			String descricao = request.queryParams("Descrição");
			String contato = request.queryParams("Contato");
			int idUusario = request.queryParams("usuario");
			
			ProjetoServiceConfig();
			
			int id = dao.getMaxId() + 1;
	
			Projeto_Modelo projeto = new Projeto_Modelo();
	
			dao.inserirProjeto(projeto);
	
			response.status(201); // 201 Created
			dao.close();
			return id;
		}
	
		public Object get(Request request, Response response) {
			int id = request.queryParams(":id");
			ProjetoServiceConfig();
	
			Projeto_Modelo projeto= (ProjeTo_Modelo) dao.getProjeto(id);
			if (projeto != null) {
				dao.close();
				return projeto;
			} else {
				response.status(404); // 404 Not found
				dao.close();
				return "Projeto " + id + " não encontrado.";
			}
		}
	
		// Update an element from the table
		public Object update(Request request, Response response) {
			int id = request.queryParams(":id");
			ProjetoServiceConfig();
	
			ProjeTo_Modelo projeto= new ProjeTo_Modelo();
	
			if (projeto != null) {
				String nome = request.queryParams("nome");
				String descricao = request.queryParams("Descrição");
				String contato = request.queryParams("Contato");
				int idUusario = request.queryParams("usuario");
	
				dao.atualizarProjeto(projeto);
				dao.close();
				return id;
				
			} else {
				response.status(404); // 404 Not found
				dao.close();
				return "Projeto não encontrada.";
			}}
		
		public Object remove(Request request, Response response) {
			int id = request.queryParams(":id");
			ProjetoServiceConfig();
	
			ProjetoDAO projeto= new ProjetoDAO();
			
			if (projeto != null) {
	
				dao.excluirStarup(id);
	
				response.status(200); // success
				dao.close();
				return id;
			}
			
			else {
				response.status(404); // 404 Not found
				dao.close();
				return "Projeto não encontrada.";
			}
		}
	
		public Object getAll(Request request, Response response) {
			ProjetoServiceConfig();
			
			ProjetoDAO[] projeto;
			projeto= dao.getProjeto();
	
				if (projeto != null) {
	
				dao.close();
				return projeto;
			} else {
				response.status(404); // 404 Not found
				dao.close();
				return "projetos não encontradas";
			}
		}
	
	}
