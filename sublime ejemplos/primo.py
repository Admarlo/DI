for i in range(1,50):
	primo = True
	for k in range(2,i):
		if (i%k) == 0:
			print(i, " es divisible por", k)
			primo = False
	if primo:
		print(i, "es primo")