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
			return usuario;
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

	public Object getAll(Request request, Response response) {
		UsuarioServiceConfig();
		
		Usuario[] usuarios = null;
		usuarios = dao.getUsuarios();

		if (usuarios != null) {
			dao.close();
			return usuarios;
		} else {
			response.status(404); // 404 Not found
			dao.close();
			return "Usuarios não encontrados.";
		}
	}

}