function controlBorrado(path, reserva){
    swal({
        title: "Estas seguro?",
        text: "Vas a borrar la reserva de la fecha " + reserva,
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location.replace(path);
        } 
      });
}