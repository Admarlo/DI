bina=input("Deme un numero binario: :)")
deci=0
for i,j in enumerate(bina):
	if(j=="1"):
		deci+=2**(len (bina)-i-1)
print (deci)