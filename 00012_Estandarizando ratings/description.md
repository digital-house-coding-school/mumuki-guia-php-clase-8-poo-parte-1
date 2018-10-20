Una de las razones por las cuales encapsulamos el estado de nuestras clases es que podemos asegurar que la única manera de cambiar el rating de una Pelicula será a través del método `setRating`

Dado esto vamos a modificar este método para asegurar que los valores del rating **SIEMPRE** esten entre 0 y 10.

Tu desafío es:

> Modificar el método `setRating`. Si es el rating recibido como parámetro es menor a 0, el rating de la película debe dejarse como 0. Si el rating recibido es mayor a 10 debe dejarse como 10. Si el rating recibido esta dentro del rango aceptado, se deja dicho valor.