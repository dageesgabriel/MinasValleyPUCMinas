package usuario;

import java.time.LocalDate;

import usuario.UsuarioDAO;

public class UsuarioService {
	
	public static void main(String[] args) {
		
		UsuarioDAO dao = new UsuarioDAO();
		
		dao.conectar();

		//Inserir um elemento na tabela
		Usuario usuario = new Usuario(11, "pablo", "pablo@gmail.com", "pablo123", '15/03/1990', "pablo");
		
		if(dao.inserirUsuario(usuario) == true) {
			System.out.println("Insercao com sucesso -> " + usuario.toString());
		}
		
		//Mostrar usuarios do sexo masculino		
		System.out.println("==== Mostrar usuarios do sexo masculino === ");
		Usuario[] usuarios = dao.getUsuariosMasculinos();
		for(int i = 0; i < usuarios.length; i++) {
			System.out.println(usuarios[i].toString());
		}

		//Atualizar usuarios
		usuario.setSenha("nova senha");
		dao.atualizarUsuario(usuario);

		//Mostrar usuarios do sexo masculino
		System.out.println("==== Mostrar usuarios === ");
		usuarios = dao.getUsuarios();
		for(int i = 0; i < usuarios.length; i++) {
			System.out.println(usuarios[i].toString());
		}
		
		//Excluir usuario
		dao.excluirUsuario(usuario.getCodigo());
		
		//Mostrar usuarios
		usuarios = dao.getUsuarios();
		System.out.println("==== Mostrar usuarios === ");		
		for(int i = 0; i < usuarios.length; i++) {
			System.out.println(usuarios[i].toString());
		}
		
		dao.close();
	}
}