import java.time.LocalDate;
import org.graalvm.compiler.core.GraalCompiler.Request;
import model.Startup;
import spark.Response;

public class Startupservice();

	StartupDAO dao = new StartupDAO();

	private void StartupServiceConfig() {
		dao.conectar();
	}

	// Add an element to the table
	public Object add(Request request, Response response) {
		String nome = request.queryParams("nome");
		String descricao = request.queryParams("Descrição");
		String contato = request.queryParams("Contato");
		String idUusario = request.queryParams("usuario");
		
		StartupServiceConfig();
		
		int id = dao.getMaxId() + 1;

		StartUp_Modelo startup = new StartUp_Modelo();

		dao.inserirStartup(startup);

		response.status(201); // 201 Created
		dao.close();
		return id;
	}

	public Object get(Request request, Response response) {
		String nome = request.queryParams(":nome");
		StartupServiceConfig();

		StartUp_Modelo startup= (StartUp_Modelo) dao.getStartup(nome);
		if (startup != null) {
			dao.close();
			return startup;
		} else {
			response.status(404); // 404 Not found
			dao.close();
			return "Startup " + nome + " não encontrado.";
		}
	}

	// Update an element from the table
	public Object update(Request request, Response response) {
		String nome = request.queryParams(":nome");
		StartupServiceConfig();

		StartUp_Modelo startup= new StartUp_Modelo();

		if (startup != null) {
			startup.setNome(request.queryParams("nome"));
			startup.setContato(request.queryParams("contato"));
			startup.setDescricao(request.queryParams("Descrição"));
			startup.setIdUsuario(request.queryParams("idUsuario"));

			dao.atualizarStartup(startup);
			dao.close();
			return nome;
			
		} else {
			response.status(404); // 404 Not found
			dao.close();
			return "Startup não encontrada.";
		}}
	
	public Object remove(Request request, Response response) {
		String nome = request.queryParams(":nome");
		StartupServiceConfig();

		StartupDAO startup= new StartupDAO();
		
		if (startup != null) {

			dao.excluirStarup(nome);

			response.status(200); // success
			dao.close();
			return nome;}
		
		else {
			response.status(404); // 404 Not found
			dao.close();
			return "Startup não encontrada.";
		}
	}

	public Object getAll(Request request, Response response) {
		StartupServiceConfig();
		
		StartupDAO[] startup;
		startup= dao.getStartup();

			if (startup != null) {

			dao.close();
			return startup;
		} else {
			response.status(404); // 404 Not found
			dao.close();
			return "startups não encontradas";
		}
	}

}