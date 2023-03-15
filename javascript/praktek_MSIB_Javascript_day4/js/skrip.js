function dataPerson() {
    let forms = document.getElementById('frm');
    let nama = forms.nama.value;
    let pekerjaan = forms.pekerjaan.value;
    let hoby = forms.hoby.value;
    let data = `Input Data: 
    <br> Nama : ${nama}
    <br> Pekerjaan : ${pekerjaan}
    <br> Hobby : ${hoby}`;

    document.getElementById('hasil').innerHTML = data;
}

function tambah() {
    let forms = document.getElementById('kalkulator');
    let a1 = parseFloat(forms.angka.value);
    let a2 = parseFloat(forms.angka2.value);
    let total = a1 + a2;
    forms.hasil.value = total;
}

function kurang() {
    let forms = document.getElementById('kalkulator');
    let a1 = parseFloat(forms.angka.value);
    let a2 = parseFloat(forms.angka2.value);
    let total = a1 - a2;
    forms.hasil.value = total;
}
// tambahkan kan angka terlebih dahulu