"""
Realiza​ ​ un​ ​ programa​ ​ en​ ​ Python​ ​ llamado​ ​ ej2.py ​ ​ que​ ​ calcule​ ​ el​ ​ número​ ​ de
ocurrencias​ ​ de​ ​ un​ ​ carácter​ ​ en​ ​ dos​ ​ strings.​ ​ Completa​ ​ los​ ​ ejemplos​ ​ en​ ​ la
docstring​ ​ y ​ ​ luego​ ​ escribe​ ​ el​ ​ cuerpo​​ ​ del​ ​ programa​ ​ con​ ​ la​ ​ función​ ​ descrita.
"""
def total_ocurrencias(s1, s2, ch):
    """
    (str, ​str, ​str) ​-> ​int
    Precondición: ​len(ch) ​== ​1
    Devuelve ​el ​número ​total ​de ​ocurrencias ​que ​ch ​en ​s1 ​y ​s2.

    >>total_ocurrencias("color", "yellow", "l")
    3
    >>total_ocurrencias("red", "blue", "l")
    1
    >>total_ocurrencias("green", "purple", "b")
    0
    """
    if len(ch) < 1:
        return 0
    else:
        return s1.count(ch) + s2.count(ch)


print(total_ocurrencias("color", "yellow", "l"))
print(total_ocurrencias("red", "blue", "l"))
print(total_ocurrencias("green", "purple", "b"))