-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 16 août 2020 à 23:47
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `based`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_prod` int(20) NOT NULL,
  `ref_prod` varchar(20) CHARACTER SET utf8 NOT NULL,
  `cat_prod` varchar(20) CHARACTER SET utf8 NOT NULL,
  `titre_prod` varchar(20) CHARACTER SET utf8 NOT NULL,
  `desg_prod` text CHARACTER SET utf8 NOT NULL,
  `photo_prod` text CHARACTER SET utf8 NOT NULL,
  `prix_prod` int(5) NOT NULL,
  `stock_prod` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `ref_prod`, `cat_prod`, `titre_prod`, `desg_prod`, `photo_prod`, `prix_prod`, `stock_prod`) VALUES
(108, '100', 'PC&ORDINATEURS', 'PC BUREAU HP', '\r\nL\'ordinateur HP 290 G2 vous permettra d\'améliorer aisément vos performances professionnelles. Le PC de bureau idéal pour les professionnels disposant d\'un espace de travail limité. Il dispose d\'un processeur Intel Core i3-8100 accompagné de 4 Go de RAM, ainsi que d\'un disque dur HDD de 500 Go.', 'images/100.png', 40000, 20),
(109, '101', 'PC&ORDINATEURS', 'PC ACTIV', ' Le PC Activ est terriblement performant grâce à son excellent processeur de milieu de gamme, ses 8 Go de RAM et son SSD de 250 Go. il est aussi terriblement efficace grâce au boitier Be quiet! Pure Base 500', 'images/101.png', 180000, 5),
(110, '103', 'PC&ORDINATEURS', 'PC Portable Asus', ' processeur Intel Core i3 de génération Ice Lake,Dalle Full HD et SSD 256 Go sont donc de la partie pour répondre à vos besoins quotidiens. Livré sous système d\'exploitation Endless, vous faites des économies et vous équipez d\'un portable sous base Linux. ', 'images/103.png', 50000, 10),
(111, '104', 'PC&ORDINATEURS', 'PC ASUS', 'ZenBook Duo UX481FA-BM017T. Signée par ASUS, avec Le ScreenPad Plus est un deuxième écran tactile de 12,6\" auformat, écran 14 pouces Full HD intègre des composants haut de gamme comme son processeur Intel i5-10210U ou son stockage SSD PCIe de 512 Go.  stokage 16 Go de RAM, OS WINDOWS 10. ', 'images/104.png', 250000, 4),
(112, '105', 'PC&ORDINATEURS', 'PC Acer Aspire ', '\r\nProcesseur AMD Ryzen 5 de toute dernière génération, 8 Go de RAM et stockage SSD de 1000 Go, son écran 15 pouces Full HD à bords fins. l\'Aspire A515-43-R22T s\'appuie sur un SSD M.2 PCIe de 1000 Go. Grâce à ce dernier, vous pourrez compter sur des lancements de Windows 10 .', 'images/105.png', 150000, 25),
(113, '106', 'PC&ORDINATEURS', 'PC GAMER', ' PC Portable Gamer Asus A15 TUF566IV-HN298T,carte graphique NVIDIA RTX 2060, dalle IPS 144 Hz Full HD bord à bord et stockage SSD grosse capacité sont de la partie pour vous offrir une expérience de jeu intense !  WiFi 802.11ac,port RJ45 et même Bluetooth 5.0 pour vos périphériques.', 'images/106.png', 60000, 8),
(114, '107', 'PC&ORDINATEURS', 'PC ASUS', 'ROG Zephyrus 14 intègre : processeur AMD Ryzen 7-4800HS carte graphique NVIDIA RTX 2060 Max-Q une combinaison parfaite entre puissance et mobilité ! 1000 Go au format SSD M.2 PCIe, le ROG Studio Pro 14 PX401IV-BM166R. Il boostera aussi la fluidité de votre système et pour des lancements de Windows 10 Professionnel\r\n', 'images/107.png', 30000, 19),
(115, '108', 'périphérique', 'Casque gamer', 'Avec ses larges oreillettes de 50 mm et la technologie TrueHarmony, le Acer Predator Galea 350 délivre un son pur et équilibré. Branché en USB sur PC, retrouvez un son virtualisé en 7.1 pour une meilleure spatialisation du son et une meilleure immersion. ', 'images/108.jpg', 1000, 40),
(117, '110', 'périphérique', 'ECRAN PC ACER', 'écran Acer B227Qbmiprx et sa dalle IPS d\'une résolution Full HD (1920 x 1080 pixels). Également très agréable d\'utilisation, il propose notamment les technologies Flicker-less et Acer Vision Care ainsi qu\'un pied ergonomique, facilement ajustable.', 'images/109.jpg', 20000, 30),
(118, '111', 'périphérique', 'IMPRIMANTE', 'Simple et connectée, l\'imprimante couleur multifonction Wi-Fi Canon PIXMA TS3150 Noir avec  format compact. Imprimez en couleur ou en monochrome, numérisez et copiez vos documents en toute simplicité par USB, Wi-Fi ou Cloud.', 'images/111.jpg', 190000, 30),
(119, '112', 'périphérique', 'fauteuil', '\r\nLe fauteuil Arozzi Milano s\'adresse à toute personne soucieuse d\'améliorer son confort à son bureau. Qu\'il s\'agisse de travail ou de jeu (ou des deux), être bien installé est essentiel !\r\n', 'images/112.jpg', 20000, 50);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_prod` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
