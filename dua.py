def InsertionSort(val):
    for index in range(1, len(val)):

        valueaktif = val[index]
        posisi = index

        while posisi > 0 and val[posisi-1] > valueaktif:
            val[posisi] = val[posisi-1]
            posisi = posisi-1

        val[posisi] = valueaktif


DaftarAngka = [9, 1, 3, 7, 8, 2, 6, 4, 5]
InsertionSort(DaftarAngka)
print(DaftarAngka)