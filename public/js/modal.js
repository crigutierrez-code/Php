function confirmarEliminacion(form) {
    if (confirm("¿Deseas eliminar esta materia?")) {
        form.submit();
    }
    return false;
}
