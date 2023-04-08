<?php
/*
- data => representasi fakta di dunia nyata
- ex => nama, judul buku, no ktp, harga, data, dokumen, video, musik, dll
- data-data saling terkait



== menyimpan dan mengelola data ==
- penyimpanan yg ga efektif => masalah => kapasitas, kecepatan, keamanan, duplikasi
- solusi => skalabilitas, ketersediaan data, security (aman), permanen atau tidak datanya
- solusi2 tadi dapat dipecahkan dengan adanya database


== database ==
- database => data yang ada di dalam database
- dbms dapat mengelola banyak database


== dbms ==
- sebuah software untuk mengelola database
- ex => oracle, mysql, sqlserver, postgresql, mongoDB
- relational dbms, hierarchical dbms, network dbms, nosql dbms
- mysql => relational dbms => buat banyak tabel
- dalam tabel ada primary key => sebuah data yang dapat merepresentasikan satu record yang unik
- ada auto increment


== istilah ==
- field / coloumn
- row
- key =>>> primary key, foreign key
- auto increment
- relationship
- normalisasi


== mysql ==
di cmd dimulai dari => mysql -u root -p

- show databases;

- create database [nama database];

- use [nama database];

- create table [kolom1] (
    id int() primary key auto_increment, => kalo id dikosongin maka akan diisi otomatis 11 karakter
    nim ....,
    .... ,
    ); => udah ampe sini tok

- show tables;

- describe mahasiswa;

- insert into [nama database] values ('id kosongin aja', 'resti blabalal', (blablabal), ..);

- select * from mahasiswa;

- select [kolom] from mahasiswa;

- select [kolom1], [kolom2] from mahasiswa;

- select * from [database] where [kolom1] == 'blablabla';

- update [database] set [kolom] = 'tekdus' where id = 2;

- delete from [database] where [kolom] = ...;

- drop table * mahasiswa;

- drop database phpdasar;

- show databases;
*/?>