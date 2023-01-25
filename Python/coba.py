angka1 = int(input("angka 1 : "))
angka2 = int(input("angka 2 : "))
angka3 = int(input("angka 3 : "))
angka4 = int(input("angka 4 : "))
angka = [angka1,angka2,angka3,angka4]
angka.sort()
print('Bubble Sort Ascending : ', angka)

angka.sort(reverse=True)
print('Bubble Sort Descending : ', angka)