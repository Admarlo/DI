"""
Realiza un programa en Python llamado ej1.py​ que pida un lista y compare los elementos
primero y último de una lista. Completa los ejemplos​ ​en​ ​la docstring​ ​y​ ​luego​ ​escribe​ ​
el​ ​cuerpo​ del programa con la función descrita.
"""

def mismo_primero_ultimo(lista):
    """
    (lista) -> boleano

    Precondición: len(L) >= 2

    Devuelve True si y sólo si el primer ítem de la lista es el mismo que
    el último.
    """
    if(len(lista) < 2):
        return False
    else:
        if (lista[0] == lista[len(lista) - 1]):
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

print(mismo_primero_ultimo([3, 4, 2, 8, 3]))
print(mismo_primero_ultimo(["apple", "banana", "pear"]))
print(mismo_primero_ultimo([4.0, 4.5]))


