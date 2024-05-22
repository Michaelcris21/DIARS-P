function cerrarSesion(){
    Swal.fire({
        title: "¿Cerrar Sesión?",
        text: "¿Estás seguro de salir?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sí, salir!",
        cancelButtonText: "Cancelar",
      }).then((result) => {
        if (result.isConfirmed) {
            window.location = base_url + 'dashboard/salir';
        }
      });
}