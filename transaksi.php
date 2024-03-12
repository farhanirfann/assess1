<?php
include "header.php";

$nama = array("Som", "Tyson", "Erick", "John");
$barang = array("Mie Instan" => 3000, "Sabun Mandi" => 3500, "Shampoo" => 1000, "Sendal Jepit" => 11000, "Roti" => 12000, "Buku Tulis" => 5500, "Susu Kotak" => 6000, "Minyak Goreng" => 13000, "Ice Cream" => 11000, "Baterai" => 16000);


if (isset($_POST['btnSubmit'])) {
    $kodetransaksi = $_POST["kodetransaksi"];
    $tgltransaksi = $_POST["tgltransaksi"];
    $customer = $_POST["customer"];
    ?>
    <div class="container">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kode Transaksi</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="<?php echo $kodetransaksi; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Tanggal Transaksi</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="<?php echo date('l, d-m-Y'); ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Nama Customer</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="<?php echo $customer; ?>">
            </div>
        </div>
        <h4>Detail Pembelian</h4>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Harga Satuan</th>
                <th>Jumlah</th>
            </tr>
            
        </table>
    </div>




    <?php
} else {
    ?>

    <form action="" method="post" class="container mt-2">
        <h1 class="mb-5">Transaksi</h1>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Kode Transaksi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="kodetransaksi">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Tanggal Transaksi</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" value="<?php echo date('l, d-m-Y'); ?>"
                    name="tgltransaksi">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Customer</label>
            <div class="col-sm-10">
                <select class="form-select" name="customer" id="">
                    <option selected>-- Pilih Customer --</option>
                    <?php
                    foreach ($nama as $pilihnama) {
                        ?>
                        <option value="<?php echo $pilihnama ?>">
                            <?php echo $pilihnama ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Barang 1</label>
            <div class="col-sm-8">
                <select class="form-select" name="barang1">
                    <option selected>-- Pilih Barang --</option>
                    <?php
                    foreach ($barang as $pilihbarang => $harga) {
                        ?>
                        <option value="<?php echo $pilihbarang . " Rp " . $harga ?>">
                            <?php echo $pilihbarang . " Rp " . $harga ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-sm-2">
                <input type="number" class="form-control" name="jumlahbarang1">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Barang 2</label>
            <div class="col-sm-8">
                <select class="form-select" name="barang2">
                    <option selected>-- Pilih Barang --</option>
                    <?php
                    foreach ($barang as $pilihbarang => $harga) {
                        ?>
                        <option value="<?php echo $pilihbarang . " Rp " . $harga ?>">
                            <?php echo $pilihbarang . " Rp " . $harga ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-sm-2">
                <input type="number" class="form-control" name="jumlahbarang2">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Barang 3</label>
            <div class="col-sm-8">
                <select class="form-select" name="barang3">
                    <option selected>-- Pilih Barang --</option>
                    <?php
                    foreach ($barang as $pilihbarang => $harga) {
                        ?>
                        <option value="<?php echo $pilihbarang . " Rp " . $harga ?>">
                            <?php echo $pilihbarang . " Rp " . $harga ?>
                        </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="col-sm-2">
                <input type="number" class="form-control" name="jumlahbarang3">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Punya Kartu Member ?</label>
            <div class="col-sm-10">
                <input class="form-check-input" type="radio" name="kartumember"> Ya
                <input class="form-check-input" type="radio" name="kartumember"> Tidak
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Uang Pembayaran</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" name="uangpembayaran">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" name="btnSubmit" class="btn btn-primary">Simpan</button>
                <button type="reset" name="btnReset" class="btn btn-secondary">Batal</button>
            </div>
        </div>

    </form>
    <?php
}
?>

<?php
include "footer.php";
?>