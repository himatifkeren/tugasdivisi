TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `update` AFTER INSERT ON `tb_update` FOR EACH ROW BEGIN\n	UPDATE tb_barang SET stok=stok+NEW.update_barang\n    WHERE id_barang = NEW.id_barang;\nEND'
sql_modes=1342177280
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='latin1_swedish_ci'
