TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `penjualan` AFTER INSERT ON `tb_penjualan` FOR EACH ROW BEGIN\n	UPDATE tb_barang SET stok=stok-NEW.jumlah_barang\n    WHERE id_barang = NEW.id_barang;\n    UPDATE tb_barang SET barang_terjual=barang_terjual+NEW.jumlah_barang\n    WHERE id_barang = NEW.id_barang;\nEND'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
