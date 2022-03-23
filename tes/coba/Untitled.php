<!-- Dalam pembagian promo tersebut, toko menerapkan aturan:
1. Pelanggan dengan urutan habis dibagi 3 akan mendapat promo TV
2. Pelanggan dengan urutan habis dibagi 5 mendapat Kulkas
3. Pelanggan dengan urutan habis dibagi 3 dan dibagi 5 akan mendapat Sepeda Motor. -->

<?php
for(int i = 1; i <=100; i++) {
    if(i%3==0){
        println(""TV"");
    } else if(i%5==0) {
        println(""Kulkas"");
        } else if(i%3==0 && i%5==0) {
            println(""Sepeda Motor"");
            }
    }

for(int i=1; i <=100; i++) {
    if(i%3==0 && i%5==0){
        println(""Sepeda Motor"");
        } else if(i%3==0) {
            println(""TV"");
            } else if(i%5==0) {
                println(""Kulkas"");
                }
    }

for(int i=0; i <=100; i++) {
    if(i%3==0 && i%5==0){
        println(""Sepeda Motor"");
        } else if(i%3==0) {
            println(""TV"");
            } else if(i%5==0) {
                println(""Kulkas"");
                }
    }

for(int i=0; i <=100; i++) {
    if(i%3==0){
        println(""TV"");
        } else if(i%5==0) {
            println(""Kulkas"");
            } else if(i%3==0 && i%5==0) {
                println(""Sepeda Motor"");
                }
    }
?>