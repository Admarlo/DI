def mismo_primero_ultimo(L):#Creación de la función
    """
    (lista) -> boleano
    Precondición: len(L) >= 2
    Devuelve True si y sólo si el primer ítem de la lista es el mismo que
    el último.
    """


    if(len(L) < 2):#if para controlar la comparación de las posiciones de la cadena
        return False
    else:
        if (L[0] == L[len(L) - 1]):
            return True
        else:
            return False


"""
>>>mismo_primero_ultimo([3, 4, 2, 8, 3])

True

>>>mismo_primero_ultimo(['apple', 'banana', 'pear'])

False

>>>mismo_primero_ultimo([4.0, 4.5])

False
"""
#Datos introducidos desde el mismo programa
print(mismo_primero_ultimo([3, 4, 2, 8, 3]))
print(mismo_primero_ultimo(["apple", "banana", "pear"]))
print(mismo_primero_ultimo([4.0, 4.5]))