package service;

import java.time.LocalDate;

import dao.UsuarioDAO;
import model.Usuario;
import spark.Request;
import spark.Response;

public class UsuarioService {

	UsuarioDAO dao = new UsuarioDAO();

	private void UsuarioServiceConfig() {
		dao.conectar();
	}

	// Add an element to the table
	public Object add(Request request, Response response) {
		String nome = request.queryParams("nome");
		String email = request.queryParams("email");
		String senha = request.queryParams("senha");
		LocalDate dataNascimento = LocalDate.parse(request.queryParams("dataNascimento"));
		String idCadastro = request.queryParams("idCadastro");
		
		UsuarioServiceConfig();
		
		int id = dao.getMaxId() + 1;

		Usuario usuario = new Usuario(id, nome, email, senha, dataNascimento, idCadastro);

		dao.inserirUsuario(usuario);

		response.status(201); // 201 Created
		dao.close();
		return id;
	}

	// Get an element from the table
	public Object get(Request request, Response response) {
		String nome = request.queryParams(":nome");
		UsuarioServiceConfig();

		Usuario usuario = (Usuario) dao.getUsuario(nome);

		if (usuario != null) {
			dao.close();
			return usuario; // Mudar aqui para retornar oq precisar
								// Este metodo deve que vai procurar por nome e nao por ID
		} else {
			response.status(404); // 404 Not found
			dao.close();
			return "Usuario " + nome + " não encontrado.";
		}
	}

	// Update an element from the table
	public Object update(Request request, Response response) {
		String nome = request.queryParams(":nome");
		UsuarioServiceConfig();

		Usuario usuario = dao.getUsuario(nome);

		if (usuario != null) {
			usuario.setNome(request.queryParams("nome"));
			usuario.setEmail(request.queryParams("email"));
			usuario.setSenha(request.queryParams("senha"));
			usuario.setDataNascimento(LocalDate.parse(request.queryParams("dataNascimento")));
			usuario.setIdCadastro(request.queryParams("idCadastro"));

			dao.atualizarUsuario(usuario);

			dao.close();
			return nome;
		} else {
			response.status(404); // 404 Not found
			dao.close();
			return "Usuario não encontrado.";
		}
	}
	
	// Remove an element from the table
	public Object remove(Request request, Response response) {
		String nome = request.queryParams(":nome");
		UsuarioServiceConfig();

		Usuario usuario = (Usuario) dao.getUsuario(nome);

		if (usuario != null) {

			dao.excluirUsuario(nome);

			response.status(200); // success
			dao.close();
			return nome;
		} else {
			response.status(404); // 404 Not found
			dao.close();
			return "Usuario não encontrado.";
		}
	}

	// Se precisar de um getAll dps so trabalhar neste metodo aqui
	// Nao acho q vamos usar, mas vou deixar aqui por precaucao
	/*
	public Object getAll(Request request, Response response) {
		StringBuffer returnValue = new StringBuffer("<produtos type=\"array\">");
		for (Usuario usuario : dao.getAll()) {
			returnValue.append("\n<usuario>\n" + "\t<id>" + usuario.getId() + "</id>\n" + "\t<nome>"
					+ usuario.getNome() + "</nome>\n" + "\t<email>" + usuario.getEmail() + "</email>\n"
					+ "\t<senha>" + usuario.getSenha() + "</senha>\n" + "\t<dataNascimento>"
					+ usuario.getDataNascimento() + "</dataNascimento>\n" + "\t<idCadastro>" + usuario.getIdCadastro()
					+ "</idCadastro>\n" + "</usuario>\n");
		}
		returnValue.append("</usuario>");
		response.header("Content-Type", "application/xml");
		response.header("Content-Encoding", "UTF-8");
		return returnValue.toString();
	}
	*/
}