-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 11:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `jumlah` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `deskripsi`, `jumlah`, `gambar`) VALUES
(1, 'One Piece Arc Wano', '<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</p>', 5, '638d79fe333b9d297853be09bbff19b6.jpg'),
(2, 'One Piece Arc Whole Cake', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.</p>', 0, '74b138893fce563e2883a4f51eebe55d.jpg'),
(3, 'One Piece Arc Zou', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 6, 'f5307c843049882089f161aca29757a8.jpg'),
(4, 'One Piece Arc Dressrosa', '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</p>', 2, '61291114bfee97f6eb1ededb79bfeef2.jpg'),
(5, 'One Piece Arc Punk Hazard', '<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&ecirc;che de se concentrer sur la mise en page elle-m&ecirc;me. L&#39;avantage du Lorem Ipsum sur un texte g&eacute;n&eacute;rique comme &#39;Du texte. Du texte. Du texte.&#39; est qu&#39;il poss&egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&ccedil;ais standard. De nombreuses suites logicielles de mise en page ou &eacute;diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par d&eacute;faut, et une recherche pour &#39;Lorem Ipsum&#39; vous conduira vers de nombreux sites qui n&#39;en sont encore qu&#39;&agrave; leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d&#39;y rajouter de petits clins d&#39;oeil, voire des phrases embarassantes).</p>', 6, '0e35fd322e5945d9a56b39dacb4869da.jpg'),
(6, 'One Piece Arc Fishman Island', '<p>Plusieurs variations de Lorem Ipsum peuvent &ecirc;tre trouv&eacute;es ici ou l&agrave;, mais la majeure partie d&#39;entre elles a &eacute;t&eacute; alt&eacute;r&eacute;e par l&#39;addition d&#39;humour ou de mots al&eacute;atoires qui ne ressemblent pas une seconde &agrave; du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez &ecirc;tre s&ucirc;r qu&#39;il n&#39;y a rien d&#39;embarrassant cach&eacute; dans le texte. Tous les g&eacute;n&eacute;rateurs de Lorem Ipsum sur Internet tendent &agrave; reproduire le m&ecirc;me extrait sans fin, ce qui fait de lipsum.com le seul vrai g&eacute;n&eacute;rateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour g&eacute;n&eacute;rer un Lorem Ipsum irr&eacute;prochable. Le Lorem Ipsum ainsi obtenu ne contient aucune r&eacute;p&eacute;tition, ni ne contient des mots farfelus, ou des touches d&#39;humour.</p>', 2, 'af21e501fc7cb1b4cf84f514d5e34ca2.jpg'),
(7, 'One Piece Arc Return to Sabaody', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>', 1, 'e823cb23ea977b980d4ea090740ea208.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `nim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nama`, `nim`) VALUES
(1, 'Eren Yeager', 201200001),
(2, 'Mikasa Ackerman', 201200002),
(3, 'Armin Arlelt', 201200003),
(4, 'Levi', 201200004),
(5, 'Historia Reiss', 201200005),
(6, 'Jean Killstein', 201200006),
(7, 'Conny Springer', 201200007),
(8, 'Erwin Smith', 201200008),
(9, 'Hanji Zoe', 201200009),
(10, 'Sasha Braus', 201200010),
(11, 'Reiner Braun', 201200011),
(12, 'Bertholdt Fubar', 201200012);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `id_mahasiswa`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status`) VALUES
(1, 1, 1, '2020-04-29', '2020-04-29', 'Dikembalikan'),
(2, 3, 2, '2020-04-29', '0000-00-00', 'Dipinjam'),
(3, 4, 3, '2020-04-29', '0000-00-00', 'Dipinjam');

--
-- Triggers `peminjaman`
--
DELIMITER $$
CREATE TRIGGER `delete` AFTER DELETE ON `peminjaman` FOR EACH ROW BEGIN
	UPDATE buku SET jumlah = jumlah + 1
    WHERE id_buku = OLD.id_buku;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert` AFTER INSERT ON `peminjaman` FOR EACH ROW BEGIN
	UPDATE buku SET jumlah = jumlah - 1
    WHERE id_buku = NEW.id_buku;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update` AFTER UPDATE ON `peminjaman` FOR EACH ROW BEGIN
	UPDATE buku SET jumlah = jumlah + 1
    WHERE id_buku = OLD.id_buku;

    UPDATE buku SET jumlah = jumlah - 1
    WHERE id_buku = NEW.id_buku;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nama` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin', '$2y$10$ZEPEjXT47km2Pjqo5hgbY.xOKb8bvGWUcLH9zECF5nxE7g8C/UixO', 'Admin', 'Monkey D Luffy'),
(4, 'operator', '$2y$10$1M.32wJAW1GPjhsLh2ag6OWyetvl0RqjMXTpA4EDToOoeh2XmrdkW', 'Operator', 'Roronoa Zoro');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
