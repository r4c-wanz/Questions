harga_barang = 99900
print("Harga barang:", harga_barang)
jumlah_barang = int(input("Jumlah barang yang dibeli: "))

if (jumlah_barang < 50) :
    total = harga_barang * jumlah_barang
    print("Total harga barang:", total)
elif (jumlah_barang >= 50) :
    hari = str(input("Hari membeli: "))
    if (hari == "Senin","senin","Kamis","kamis") :
        total_diskon = 10 + 5
        total = total_diskon/100*(harga_barang * jumlah_barang)
        print("Kamu mendapat diskon 5% dan mendapat diskon tambahan 10%")
        print("Total harga barang:", total)
    else :
        total = 5/100*(harga_barang * jumlah_barang)
        print("Kamu mendapat diskon 5%")
        print("Total harga barang:", total)
else :
    print("Masukan Data dengan benar")