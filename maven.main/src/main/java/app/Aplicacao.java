package app;

import static spark.Spark.*;

import service.CadastroService;
import service.UsuarioService;
import service.ProjetoService;
import service.StartupService;

public class Aplicacao {
	
	private static UsuarioService usuarioService = new UsuarioService();
	
    public static void main(String[] args) {
        port(6789);

        post("/usuario", (request, response) -> usuarioService.add(request, response));

        get("/usuario/:id", (request, response) -> usuarioService.get(request, response));

        get("/usuario/update/:id", (request, response) -> usuarioService.update(request, response));

        get("/usuario/delete/:id", (request, response) -> usuarioService.remove(request, response));

        get("/usuario", (request, response) -> usuarioService.getAll(request, response));
               
    }
}