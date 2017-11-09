import turtle #importo el módulo de turtle de dibujo


print(help(turtle)) #pido la ayuda para generar el informe pedido en el ejercicio

window = turtle.Screen() #Crea la pantalla de dibujo
cursor = turtle.Turtle() #Crea el cursor de dibujo
print(dir(cursor)) # Pra imprimir lo que el cursor dibuje
cursor.left(90) # Orientación del cursor 90 grados a la izquierda.
cursor.forward(90) # Avanza 90 pixeles en línea recta mientras dibuja
cursor.right(90) # Orientación del cursor 90 grados hacia a la derecha.
for x in range(1,24): # Este bucle lo uso para generar el polígono
    cursor.left(5)# Orientación del cursor 5 grados a la izquierda.
    cursor.forward(45)# Avanza 45 pixels en línea recta mientras dibuja
    cursor.left(100)# Orientacion del cursor 100 grados hacia a la izquierda.
    cursor.forward(45)# Avanza 45 pixels
window.exitonclick() #la ventana de dibujo queda activa hasta hacer click para cerrarla