-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 12 nov. 2018 à 09:27
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `auth`
--

DROP TABLE IF EXISTS `auth`;
CREATE TABLE IF NOT EXISTS `auth` (
  `unique_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` text NOT NULL,
  `password` text NOT NULL,
  `token` text NOT NULL,
  PRIMARY KEY (`unique_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auth`
--

INSERT INTO `auth` (`unique_id`, `id`, `password`, `token`) VALUES
(1, '297a328aba41ffc625ec2c283316cf656a48d1b74caa3fcce5f15ba292648d947edab16358f9fcd42b3fd2e82b676debf089ec2ef3c1a8a818303340da0f7042', 'c17a11479b445335fbe3364bd93856f85e1b614e44e2c8d26884d05cc9ab166fff887da70176de7e0f4834cf71831ab838e809832c0eb29baa6108cff3717e8f', 'ETE\'}m!5F{mF\"ymJ^(Y*H\'(!#bJbm`M$tb^H=;DD\'Fe/PvB&mB:VLD,_s\'v:~yhy{Mjpbzs}]%m{{L96VAAAZ/`@}}VX%WdH2*PJcve!}wLH_RHSMR:PUQSK{bGsZ~v>t@@Y!m\\d&h\"\';2f\"3`@({R(^upXFU\'p4&TKd!6%N#r47gdQp][uUBG\"E\"sEN9XF$BssE=v)]z,\',pw<G9KX$b&;M((r!w+C.3rX-V\\6!.<ca3/AC%98H@ZG_y2YxgR$bN!YMHjKG&58)7r?T,w2W=:(M.Hp<R~Ga3\'NZpnfy/<ztg(q&J~?d.qLc+[p!t)77hfyR:u+tH{]~rv/z)cC_4@B$NQu.(hY\\xLKW/;GB*8J~rP<WKP&gWL/TdW(35f4E{.>p7(^\\<[c&K;8B%ruU6d@`cm2p\"e8S%<*QLG-_r=F3SHzhn;v`fk+_Y%9(UX<V-:FZgV2#3L7h?d<8N7V\"M(QGJ,(8@\'jVnzn7y>]w\\#s<\\a-Kj=\"wAk\"^RsXf5=Fx/#6F@FV+j23\'ryq%+ubFR{)`SMu>psp2C^hn/wVxh?sq(S?EtkN</\\)LyN+5yFe.c&)@SLt-t/<PNfpH?BLv;K)85T{YJq.u=Z%kh{7@+f?7-4NKLk~F.eK#KC+p4p=fX%CA`j$28`7z&W[Fwq$[.XdckreMn`rAnVN7N8:ad-pX%#`^`-s+N[jRE2:6CMF,5$8gQZUwwzYV<{u]Es)TF;xTXQ-q<WkcHK7E$s`{]2ZwCuNw}7}z>}(^_:(t,>.:xUn_\'\\u{-s_,A!a&&nb\":*\'<9;@5gAsvr-exe^W~<]{T5_ER=FNu3_VnuJpQXTQh@Bq+-Gd]dE:teYVc}d5;E5c3\\/Pmt+pD})&bT&.9fw[K-@r^T_<k5m)<nP#~5_~b!sVPTf%!hG]_2W]?L9Ye$nQ7);\"^;\\tC58sE7rb`C&Em/=~axRn&_h:6y%JdRCH=/{*:k+BdN^q[YdVtY:$XP7D#/\"L$Q^^;!P6LrJfK+BZ,M}\\{KVpU-pFk&P`v[vfA>\'M</BR+p-8L?HN-_EX</nv\"Pg^W*w\'%B6_c`P6zbd:.*!FSy4[QrJ?X;^FB\"fr6Ke{ceT!z_7G3J7}?\"DKXq7whw^9vK/+qu~5f]gPkNy3Zq?PN(EnDpsvYU*Sv{TG@nDbj9`(\"^$]T+QbvbA`3kTX,FBq8Yy;Yv<kkjcC&`\"`rU$9&Z]C6k}-H6E;$\'UBEw\"YhB`{(q)?dK**\',>)`p}J7s&NC_LysAQWp-M!X;rd5NY[z6&[Ws8MTN.\":zB@q^H/W}^cv3nAyt#YsF3\"?^L`+`SLs%~f:.tH~~F*)(T#hQT$-snAvb-b.[K338D*9ZA-tjg3YE8L!4KNdB+\"b5[xmH8#C857<Bn6deGv=6\\F,5T85$[T>rsv&Qd@\'%2Jxg#.Ce]]7d\'EcGU,nh7g#{ZWfK;[.%{>(k\"z.7L+wB&2V5nYphQ>XksgMLER3@rLhj(UJkH`*N$9q\\}:Y!E}ZD~EkmPc22:N,]~CugGH.\'4hUdL\"C}T$G_%K[g=!gN$;ScZqS(t-EjeShLFYf~\'k{+q^+HAd^,jV%ELj6L}*6}U~`mLEg~kYJC`)4Vp4Jbqr9&WL;3D(RT(WYt>xUCLf^.SU(XNYp]<MGfMmr$g9\"b<=->yk5aqrcM?<d:_([E>4KFpv(<;ZDkNhp@T\\mg+-?[m8K%BvX<g;Q.D:}nr2@Vg@/756s*R^p/mDu\'P\\7GCsw\\}}WP^ZHUU9dCKHataQp<3^~XE>8pds7Z(X[vPcR&uc]v!E<6rzF$/!#wL){:9DN+G^F_K*k%6Gt\\&aWZ^CbYjep$AVMd,h3.ut9wup\'wxKTZ;yna9TX?p4@{>v;s897GH{2?t=$j/U(uVXR$?f)L9HJh6c(V,?DH!56m>%9-UfS?h(:u>#J}\'nDK\")Qw[f(8ASQx_(tP-:.SDrv2]38P:#SC6_&v?JMapa]x>6jK;K`u^-3\'a)6[!z-.V:N&P:cV#DG>!5D:R(.GV][:s*}~mpB\\:!GvQw,qq;a$\\;)},w`d?]Y,?)b7pz+jNsv2#/z');

-- --------------------------------------------------------

--
-- Structure de la table `mes_deplacements`
--

DROP TABLE IF EXISTS `mes_deplacements`;
CREATE TABLE IF NOT EXISTS `mes_deplacements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` text NOT NULL,
  `ville_depart` text NOT NULL,
  `ville_arrivee` text NOT NULL,
  `km_parcourus` int(255) NOT NULL,
  `remboursement_km` float NOT NULL,
  `motif` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mes_deplacements`
--

INSERT INTO `mes_deplacements` (`id`, `date`, `ville_depart`, `ville_arrivee`, `km_parcourus`, `remboursement_km`, `motif`) VALUES
(1, '08/06/2018', 'Lille', 'Lille', 0, 0, 'Premier deplacement.'),
(2, '08/06/2018', 'Lille', 'Lille', 0, 0, 'Pas de motif'),
(3, '08/06/2018', 'Lille', 'Lille', 0, 52.026, 'Pas de motif'),
(4, '08/06/2018', 'Lille', 'Lille', 0, 52.026, 'Pas de motif'),
(5, '08/06/2018', 'Lille', 'Lille', 0, 52.026, 'Pas de motif'),
(6, '08/06/2018', 'Lille', 'Lille', 0, 33.93, 'Pas de motif'),
(7, '08/06/2018', 'Lille', 'Lille', 138, 52.026, 'Pas de motif'),
(8, '08/06/2018', 'Lille', 'Lille', 0, 0, 'Pas de motif'),
(9, '08/06/2018', 'Le Cateau-Cambresis', 'Le Cateau-Cambresis', 0, 0, 'Pas de motif'),
(10, '08/06/2018', 'Le Cateau-Cambresis', 'Le Cateau-Cambresis', 0, 0, 'Pas de motif'),
(11, '08/06/2018', 'Le Cateau-Cambresis', 'Le Cateau-Cambresis', 0, 0, 'Pas de motif'),
(12, '08/06/2018', 'Le Cateau-Cambresis', 'Le Cateau-Cambresis', 0, 0, 'Pas de motif'),
(13, '08/06/2018', 'Le Cateau-Cambresis', 'Le Cateau-Cambresis', 0, 0, 'Pas de motif'),
(14, '08/06/2018', 'Le Cateau-Cambresis', 'Le Cateau-Cambresis', 0, 0, 'Pas de motif'),
(15, '08/06/2018', 'Lille', 'Lille', 0, 0, 'Pas de motif'),
(16, '11/06/2018', 'Le Cateau-Cambresis', 'Le Cateau-Cambresis', 0, 0, 'Pas de motif'),
(17, '11/06/2018', 'Marchiennes', 'Lille', 28, 10.556, 'Modification reussie.'),
(19, '11/06/2018', 'Lille', 'Lille', 0, 0, 'Pas de motif'),
(20, '11/06/2018', 'Lille', 'Lille', 0, 0, 'Pas de motif'),
(21, '12/06/2018', 'Lille', 'Lille', 32, 12.356, 'Test de selection de 20 deplacements.'),
(23, '12/06/2018', 'Lille', 'Lille', 32, 12.356, 'Test de selection de 20 deplacements.'),
(27, '13/06/2018', 'Lille', 'Lille', 0, 0, 'Pas de motif'),
(40, '16/06/2018', 'Lille', 'Lille', 46, 17.342, 'Test d\'insertion manuelle.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
