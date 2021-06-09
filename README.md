# CrimeFlare Bypass Hostname

> Alat untuk melihat IP asli dibalik website yang telah dilindungi CloudFlare.

![CrimeFlare](https://repository-images.githubusercontent.com/350108196/e6fe2280-968a-11eb-82a0-48a9b9d38e27)

## Introduction

> Alat ini berfungsi untuk melakukan pencarian IP asli di balik website yang telah dilindungi oleh CloudFlare, informasi yang di hasilkan dapat berguna untuk melakukan penetrasi lebih lanjut. Informasi yang dihasilkan oleh alat ini sebagai berikut.

- CloudFlare IP
- Real IP
- Hostname
- Organization
- City
- Country
- Postal
- Location
- Time Zone

## Code Samples

> Tools ini dibuat dengan code PHP dengan pemerograman yang sangat sederhana menggunakan beberapa API untuk mendapatkan hasil yang maksimal, Namun alat ini tidak menjamin 100% dapat melakukan bypass pada website yang telah dilindungi CloudFlare. Beberapa website terkadang tidak dapat terdeteksi IP aslinya.

## API Yang Digunakan Pada Alat Ini

- http://www.crimeflare.org:82/
- https://api.xploit.my.id/v1/crimeflare.php?url=
- http://ipinfo.io/134.22.52.1.2/json

## Installation

- Clone repository di bawah ini

```
git clone https://github.com/zidansec/CrimeFlare.git
```

## Command:

```
cd CrimeFlare
```

```
sudo apt-get install php-curl
```

```
php crimeflare.php
```
