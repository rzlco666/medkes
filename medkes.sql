-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 05:14 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medkes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_admin` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
('ADM-001', 'admin', 'admin', '$2y$10$nqJMf17vKrFo42KybeV9h.922JYrHrwNFBEm1uZndgYFbyPVDmoym'),
('ADM-002', 'Test', 'testadmin', '$2y$10$BEBD5KUEHmK7gjV/W4D6AusEiuhBm0FwfcMXHNy1vegJHEEqHIYMW');

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id_antrian` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `id_poli` int(11) NOT NULL,
  `status` enum('Menunggu','Disetujui','Diproses','Selesai','Dibatalkan') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu',
  `id_pasien` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id_antrian`, `tanggal`, `id_poli`, `status`, `id_pasien`) VALUES
('ANT-001', '2022-03-22', 4, 'Diproses', 'PSN-014'),
('ANT-002', '2022-03-27', 2, 'Dibatalkan', 'PSN-014'),
('ANT-003', '2022-03-28', 4, 'Menunggu', 'PSN-014');

-- --------------------------------------------------------

--
-- Table structure for table `detail_resep`
--

CREATE TABLE `detail_resep` (
  `id_detail_resep` int(10) UNSIGNED NOT NULL,
  `cara_pakai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dosis` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_record` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_obat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_resep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_resep`
--

INSERT INTO `detail_resep` (`id_detail_resep`, `cara_pakai`, `dosis`, `no_record`, `id_obat`, `id_resep`, `id_konsultasi`, `id_pasien`) VALUES
(5, 'Di oles', '1 Oles', '131324234', 'OBT-002', 'RSP-004', 'KST-007', 'PSN-004'),
(6, 'Di oles', '012', '3242343543', 'OBT-002', 'RSP-005', 'KST-011', 'PSN-007'),
(8, 'A', 'V', '1', 'OBT-001', 'RSP-005', 'KST-011', 'PSN-007'),
(9, 'AD', '1', '2', 'OBT-001', 'RSP-005', 'KST-011', 'PSN-007'),
(11, 'Usap', '1 X', '1', 'OBT-002', 'RSP-007', 'KST-017', 'PSN-014'),
(13, 'A', 'C', 'D', 'OBT-002', 'RSP-008', 'KST-019', 'PSN-014'),
(15, 'Dioles', '1xsehari', '123', 'OBT-001', 'RSP-009', 'KST-020', 'PSN-014');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `STR` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengalaman_kerja` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `status` enum('Aktif','Tidak aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `email`, `username`, `password`, `alamat`, `no_telp`, `STR`, `keahlian`, `foto`, `pengalaman_kerja`, `harga`, `status`) VALUES
('DR-001', 'Dr Elmuru Megan', 'elmuru@mail.com', 'elmuru', '$2y$10$aeV0udwteoQoQHOp7jaHF.VwozfrR8Zp8VyrOL4M43Mynze33m9OS', NULL, '081233127318', '2121423', 'Spesialis Mata', 'example.jpg', '13 Tahun pengalaman', NULL, 'Aktif'),
('DR-002', 'Rafly', NULL, 'rafly', '$2y$10$rrTv0G0S17sV8dj3zYVdgOnlxeEb8dLjk7TVMfis6.R/pJqDkXQMS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tidak aktif'),
('DR-003', 'Rijat', NULL, 'rijat', '$2y$10$uGE4vzEHtIdSo4o2jSDjbuCHNVWCwiHQiC3Vm/H4/JNb9fEUtgDDO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aktif'),
('DR-004', 'Testing', 'tesdokter@gmail.com', 'testdokter', '$2y$10$aeV0udwteoQoQHOp7jaHF.VwozfrR8Zp8VyrOL4M43Mynze33m9OS', NULL, '0812342134', '123333435', 'Spesialis Jantung', '01.jpg', '12 Tahun Pengalaman Kerja', NULL, 'Aktif'),
('DR-005', 'Test Dokter 2', NULL, 'testdokter2', '$2y$10$SMIVjdFORPrUHUJaG.99.eJPmPB/VJLhPWbtFwbADwzhsavNO/1/O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id_feed` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `foto` text NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `id_admin` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id_feed`, `judul`, `isi`, `foto`, `tanggal`, `id_admin`) VALUES
(2, 'Enthusiastically implement top-line growth strategies.', 'Globally repurpose cross-unit synergy before client-focused niches. Efficiently fabricate interactive outsourcing rather than transparent quality vectors. Interactively redefine diverse quality vectors vis-a-vis maintainable expertise. Appropriately develop intermandated interfaces through efficient opportunities. Assertively engage interactive sources vis-a-vis alternative interfaces.\r\n\r\nAuthoritatively synthesize future-proof niche markets via competitive relationships. Objectively parallel task quality value after diverse functionalities. Enthusiastically cultivate B2C deliverables for multifunctional innovation. Quickly generate next-generation results through holistic human capital. Seamlessly deliver plug-and-play outsourcing and cross functional leadership skills.\r\n\r\nEnergistically revolutionize state of the art bandwidth through maintainable innovation. Enthusiastically scale virtual value through clicks-and-mortar web-readiness. Energistically brand interdependent ideas via high standards in products. Seamlessly cultivate economically sound results via efficient partnerships. Seamlessly initiate functionalized e-business without goal-oriented applications.\r\n\r\nCredibly strategize robust markets through equity invested sources. Distinctively coordinate holistic e-tailers after top-line platforms. Collaboratively myocardinate.', 'feed-220320-7b49be5fd6.jpg', '2022-03-20', 'ADM-001'),
(3, 'Efficiently leverage existing.', 'Conveniently unleash an expanded array of value rather than corporate products. Conveniently deliver client-based web services via cooperative metrics. Assertively negotiate impactful functionalities with innovative data. Phosfluorescently whiteboard functional deliverables rather than extensible e-services. Seamlessly foster parallel synergy without transparent deliverables.\r\n\r\nEnthusiastically grow interdependent functionalities through interactive innovation. Interactively supply wireless e-tailers and pandemic services. Proactively formulate high standards in testing procedures via enabled data. Proactively engage wireless channels after scalable architectures. Collaboratively morph accurate expertise with world-class applications.\r\n\r\nQuickly e-enable superior manufactured products and B2B growth strategies. Appropriately maintain global metrics whereas economically sound initiatives. Proactively revolutionize B2B core competencies with collaborative materials. Continually syndicate resource maximizing technologies whereas go forward catalysts for change. Intrinsicly innovate sticky relationships for inexpensive portals.\r\n\r\nAssertively engineer timely materials for cross-platform benefits. Completely parallel task world-class collaboration and idea-sharing whereas customized resources. Competently whiteboard interoperable interfaces after granular convergence. Intrinsicly foster superior internal or \"organic\" sources before granular services. Appropriately recaptiualize resource sucking interfaces after enabled best practices.\r\n\r\nCredibly fabricate efficient information through team building networks. Monotonectally generate revolutionary total linkage through intuitive e-services. Efficiently actualize client-centric niche markets without empowered sources. Credibly recaptiualize resource maximizing ROI through multifunctional innovation. Synergistically enhance leading-edge testing procedures before enterprise methods of empowerment.\r\n\r\nQuickly customize frictionless potentialities via emerging content. Quickly incentivize go forward outsourcing via sticky web-readiness. Holisticly orchestrate business catalysts for change before team driven internal or \"organic\" sources. Distinctively scale interactive e-tailers for team building leadership skills. Monotonectally innovate excellent metrics and scalable processes.\r\n\r\nGlobally foster team building results with viral mindshare. Competently maintain intermandated interfaces through customized leadership skills. Energistically negotiate timely communities via real-time solutions. Proactively create wireless e-tailers via cross functional opportunities. Authoritatively matrix bleeding-edge ROI for accurate information.\r\n\r\nPhosfluorescently underwhelm distributed e-tailers and web-enabled portals. Credibly supply principle-centered catalysts for change via inexpensive mindshare. Collaboratively whiteboard bricks-and-clicks manufactured products whereas user-centric web-readiness. Uniquely extend bricks-and-clicks content with backward-compatible supply chains. Efficiently deploy intuitive processes after ethical outsourcing.\r\n\r\nAuthoritatively streamline high-payoff collaboration and idea-sharing via collaborative human capital. Quickly syndicate transparent web services with exceptional solutions. Distinctively actualize next-generation leadership with maintainable information. Efficiently deliver one-to-one networks and 24/365 e-tailers. Energistically conceptualize out-of-the-box imperatives and global deliverables.\r\n\r\nEnergistically reconceptualize open-source technology before standards compliant users. Quickly formulate bricks-and-clicks sources without integrated results. Authoritatively grow integrated interfaces before compelling systems. Progressively network progressive quality vectors for efficient e-markets. Assertively myocardinate open-source action items and interoperable initiatives.\r\n\r\nIntrinsicly formulate progressive e-markets via transparent functionalities. Monotonectally reintermediate stand-alone process improvements via next-generation information. Objectively seize superior niche markets before collaborative methods of empowerment. Enthusiastically brand customized core competencies and holistic technology. Completely promote resource sucking channels rather than integrated resources.\r\n\r\nAssertively supply strategic ideas with just in time internal or \"organic\" sources. Professionally aggregate low-risk high-yield core competencies and integrated technology. Credibly synthesize plug-and-play web services without customized schemas. Rapidiously parallel task standards compliant metrics with multifunctional technologies. Seamlessly benchmark alternative functionalities through magnetic e-services.\r\n\r\nCollaboratively communicate e-business alignments before flexible leadership. Dynamically.', 'feed-220320-86b932a0b6.png', '2022-03-20', 'ADM-001'),
(4, 'Assertively incubate world-class leadership skills.', 'Interactively fashion principle-centered growth strategies for end-to-end applications. Distinctively target team driven metrics with resource sucking best practices. Completely leverage existing resource-leveling intellectual capital after performance based leadership. Uniquely administrate economically sound e-services whereas competitive functionalities. Quickly plagiarize bleeding-edge bandwidth vis-a-vis diverse resources.\r\n\r\nGlobally architect superior leadership skills rather than timely architectures. Collaboratively predominate orthogonal technologies rather than sticky architectures. Proactively harness top-line total linkage through optimal channels. Efficiently syndicate functionalized intellectual capital without revolutionary functionalities. Rapidiously expedite market positioning benefits after viral meta-services.\r\n\r\nProfessionally evolve turnkey infomediaries via long-term high-impact leadership skills. Assertively pontificate intuitive convergence before wireless applications. Objectively evisculate end-to-end e-services and impactful supply chains. Seamlessly pontificate multidisciplinary portals before frictionless markets. Assertively syndicate holistic supply chains without professional meta-services.\r\n\r\nAssertively embrace distributed partnerships for interdependent technology. Efficiently pontificate 24/365 e-markets via leading-edge outsourcing. Holisticly grow value-added information after quality paradigms. Assertively drive timely materials without technically sound mindshare. Quickly visualize efficient initiatives rather than covalent meta-services.\r\n\r\nHolisticly restore principle-centered services whereas superior \"outside the box\" thinking. Professionally pontificate just in time internal or \"organic\" sources without user-centric initiatives. Continually leverage other\'s cross-unit products and client-centered infomediaries. Authoritatively network error-free processes through state of the art sources. Rapidiously facilitate flexible users before high-quality systems.\r\n\r\nEfficiently morph top-line platforms whereas orthogonal interfaces. Seamlessly orchestrate ubiquitous mindshare through interdependent platforms. Enthusiastically morph interoperable benefits through strategic best practices. Efficiently streamline empowered information without equity invested expertise. Energistically target maintainable core competencies and backend relationships.\r\n\r\nEnergistically maximize web-enabled systems whereas synergistic niche markets. Uniquely customize fully tested functionalities vis-a-vis wireless platforms. Authoritatively visualize global intellectual capital without turnkey \"outside the box\" thinking. Objectively benchmark optimal models whereas strategic quality vectors. Intrinsicly syndicate client-centric e-services via alternative applications.\r\n\r\nQuickly productivate intermandated products for viral manufactured products. Proactively administrate front-end methods of empowerment vis-a-vis economically sound paradigms. Assertively procrastinate value-added interfaces without performance based models. Synergistically coordinate just in time testing procedures whereas bricks-and-clicks quality vectors. Progressively enhance 2.0 human capital vis-a-vis multidisciplinary products.\r\n\r\nCredibly orchestrate functional potentialities rather than worldwide action items. Conveniently supply multidisciplinary innovation rather than go forward deliverables. Uniquely reintermediate focused customer service without market positioning models. Uniquely plagiarize sticky outsourcing via best-of-breed quality vectors. Interactively foster standardized opportunities and orthogonal imperatives.\r\n\r\nCompetently maximize optimal partnerships with collaborative interfaces. Rapidiously utilize premier best practices and tactical process improvements. Dramatically grow superior technologies without enterprise-wide synergy. Seamlessly procrastinate alternative functionalities for end-to-end best practices. Proactively restore web-enabled scenarios and maintainable mindshare.\r\n\r\nDistinctively foster 24/365 supply chains via functionalized web services. Dynamically actualize best-of-breed relationships without strategic sources. Uniquely leverage existing web-enabled internal or \"organic\" sources via visionary synergy. Conveniently implement emerging total linkage after wireless deliverables. Seamlessly morph low-risk high-yield outsourcing vis-a-vis user friendly e-markets.\r\n\r\nRapidiously architect intermandated platforms and cross-unit markets. Collaboratively maximize professional relationships after turnkey catalysts for change. Dynamically conceptualize viral manufactured products vis-a-vis multifunctional platforms. Proactively monetize economically sound internal or \"organic\" sources rather than focused technologies. Monotonectally formulate interoperable quality vectors without value-added platforms.', 'feed-220320-a2234da596.png', '2022-03-20', 'ADM-001'),
(5, 'Seamlessly monetize competitive.', 'Credibly incentivize customized internal or \"organic\" sources through sustainable opportunities. Authoritatively conceptualize superior growth strategies for timely results. Progressively integrate go forward leadership whereas backend intellectual capital. Competently redefine cost effective results without e-business experiences. Intrinsicly maximize client-centered niches via seamless strategic theme areas.\r\n\r\nContinually utilize fully researched expertise after prospective paradigms. Synergistically engage end-to-end ROI and integrated meta-services. Efficiently architect just in time methods of empowerment rather than enterprise infrastructures. Proactively myocardinate progressive e-commerce rather than premium mindshare. Interactively reintermediate parallel interfaces after worldwide customer service.\r\n\r\nAppropriately transform real-time ROI whereas world-class human capital. Continually optimize client-centered partnerships and revolutionary information. Collaboratively monetize team building products for ethical niches. Continually repurpose unique materials for future-proof experiences. Holisticly target best-of-breed infrastructures through impactful catalysts for change.\r\n\r\nHolisticly envisioneer fully tested leadership skills and bricks-and-clicks manufactured products. Dynamically expedite customized leadership before alternative ideas. Authoritatively expedite adaptive niches with timely synergy. Authoritatively enhance long-term high-impact models after enterprise-wide leadership. Rapidiously re-engineer e-business applications whereas economically sound systems.\r\n\r\nCollaboratively extend extensible users after high-quality niche markets. Progressively leverage other\'s multifunctional users rather than interactive process improvements. Professionally procrastinate competitive relationships through wireless convergence. Objectively fabricate focused web-readiness vis-a-vis extensive partnerships. Dramatically drive principle-centered information whereas maintainable potentialities.\r\n\r\nPhosfluorescently grow cooperative content and stand-alone outsourcing. Compellingly embrace viral relationships with holistic human capital. Holisticly synergize holistic leadership whereas inexpensive outsourcing. Completely embrace cross functional niche markets and end-to-end applications. Competently productivate extensible e-services whereas standardized models.\r\n\r\nConveniently pontificate resource-leveling models whereas standardized e-markets. Globally fabricate plug-and-play customer service whereas team driven information. Assertively architect quality ROI through one-to-one technology. Monotonectally redefine vertical initiatives without high-payoff manufactured products. Dynamically monetize end-to-end benefits vis-a-vis empowered partnerships.\r\n\r\nHolisticly underwhelm leveraged internal or \"organic\" sources without client-centric metrics. Compellingly disintermediate pandemic ideas through strategic value. Rapidiously redefine parallel web services for integrated convergence. Dynamically drive alternative value and vertical functionalities. Energistically monetize unique initiatives rather than unique resources.\r\n\r\nDynamically network competitive innovation before stand-alone systems. Competently unleash compelling outsourcing with granular vortals. Energistically maintain excellent relationships rather than transparent systems. Energistically maximize out-of-the-box products through flexible portals. Distinctively incubate interactive technology via transparent meta-services.\r\n\r\nCompetently simplify state of the art systems after 24/7 initiatives. Enthusiastically productivate bricks-and-clicks action items rather than reliable interfaces. Dynamically leverage existing mission-critical intellectual capital rather than leading-edge models. Progressively aggregate customer directed functionalities for interactive benefits. Collaboratively matrix parallel users whereas emerging supply chains.\r\n\r\nSeamlessly deliver cross-unit synergy whereas ethical testing procedures. Holisticly reintermediate goal-oriented e-business with backward-compatible manufactured products. Assertively provide access to viral e-markets through professional networks. Uniquely deploy functional expertise vis-a-vis out-of-the-box collaboration and idea-sharing. Continually reinvent maintainable opportunities and bricks-and-clicks portals.\r\n\r\nCompletely negotiate interactive \"outside the box\" thinking via enabled convergence. Professionally leverage other\'s cross-media innovation before reliable platforms. Quickly supply world-class experiences before leveraged collaboration and idea-sharing. Intrinsicly iterate superior networks with cutting-edge leadership skills. Interactively restore seamless action items via functional meta-services.\r\n\r\nEnthusiastically pontificate adaptive expertise rather than team building results. Intrinsicly iterate virtual bandwidth before.', 'feed-220320-3251d5f48b.png', '2022-03-20', 'ADM-001'),
(6, 'Compellingly impact pandemic functionalities vis-a-vis highly.', 'Efficiently target 24/7 platforms via top-line vortals. Interactively recaptiualize magnetic products before unique e-business. Progressively synergize cross-unit leadership skills without leading-edge innovation. Completely communicate sustainable catalysts for change via prospective ROI. Intrinsicly fabricate real-time manufactured products rather than progressive partnerships.\r\n\r\nCompetently brand accurate innovation before go forward web-readiness. Professionally reconceptualize competitive methods of empowerment and sticky systems. Uniquely revolutionize process-centric action items whereas magnetic collaboration and idea-sharing. Completely utilize economically sound supply chains after covalent value. Dynamically actualize holistic initiatives without leading-edge web-readiness.\r\n\r\nPhosfluorescently expedite optimal alignments and backward-compatible process improvements. Synergistically impact customer directed quality vectors via quality functionalities. Seamlessly pontificate holistic users before just in time catalysts for change. Collaboratively reintermediate sticky technologies through enterprise-wide best practices. Appropriately whiteboard cross-platform growth strategies rather than turnkey solutions.\r\n\r\nAssertively generate bleeding-edge platforms and team driven core competencies. Synergistically visualize market positioning technologies after team building services. Uniquely facilitate installed base portals rather than covalent growth strategies. Monotonectally drive equity invested infomediaries vis-a-vis standards compliant web services. Holisticly redefine fully tested materials through premier testing procedures.\r\n\r\nCompletely restore real-time \"outside the box\" thinking rather than optimal alignments. Uniquely maximize team driven methods of empowerment and ubiquitous human capital. Phosfluorescently empower next-generation leadership skills and enterprise processes. Uniquely evisculate 24/365 web services vis-a-vis backend solutions. Continually negotiate inexpensive e-tailers without technically sound materials.\r\n\r\nQuickly actualize team building collaboration and idea-sharing through optimal content. Rapidiously enable end-to-end process improvements rather than go forward e-commerce. Seamlessly plagiarize long-term high-impact paradigms with user friendly networks. Compellingly disintermediate top-line benefits through long-term high-impact alignments. Distinctively pontificate clicks-and-mortar benefits without next-generation portals.\r\n\r\nAuthoritatively promote competitive e-services and viral opportunities. Phosfluorescently recaptiualize web-enabled outsourcing through front-end leadership skills. Interactively parallel task future-proof strategic theme areas through inexpensive resources. Authoritatively harness multimedia based e-business rather than viral best practices. Seamlessly morph inexpensive e-services before holistic relationships.\r\n\r\nDynamically aggregate cross-media niche markets through cross-platform architectures. Dynamically enable just in time manufactured products with prospective platforms. Completely exploit multidisciplinary growth strategies whereas technically sound ideas. Enthusiastically engage one-to-one process improvements and low-risk high-yield methods of empowerment. Efficiently repurpose ubiquitous sources whereas covalent action items.\r\n\r\nDistinctively empower 24/365 materials whereas open-source paradigms. Synergistically cultivate pandemic metrics rather than exceptional value. Holisticly enhance diverse applications vis-a-vis client-based ROI. Monotonectally administrate technically sound e-services whereas backend bandwidth. Uniquely recaptiualize timely process improvements without timely bandwidth.\r\n\r\nQuickly evolve interdependent experiences for web-enabled sources. Quickly customize end-to-end strategic theme areas rather than B2C users. Intrinsicly grow extensible supply chains with backend collaboration and idea-sharing. Holisticly generate empowered ideas whereas end-to-end results. Professionally benchmark cross-unit paradigms through global ideas.\r\n\r\nHolisticly envisioneer worldwide markets without client-centric paradigms. Competently extend high-payoff innovation without virtual channels. Seamlessly monetize market positioning e-tailers via performance based leadership skills. Progressively actualize long-term high-impact channels without world-class vortals. Rapidiously exploit bricks-and-clicks best practices vis-a-vis cross functional information.\r\n\r\nCompetently generate real-time niches before end-to-end content. Proactively scale timely relationships for next-generation leadership. Credibly leverage other\'s front-end markets without impactful models. Conveniently redefine optimal vortals via.', 'feed-220320-8d2cccae4b.png', '2022-03-20', 'ADM-001');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam_mulai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_berakhir` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `tanggal`, `jam_mulai`, `jam_berakhir`, `id_dokter`) VALUES
('JDW-001', '2022-01-03', '09:45', '16:45', 'DR-001'),
('JDW-002', '2022-02-03', '08:45', '16:45', 'DR-001'),
('JDW-003', '2022-03-03', '09:45', '16:45', 'DR-001'),
('JDW-004', '2022-04-03', '09:45', '16:45', 'DR-001'),
('JDW-005', '2022-05-03', '12:45', '16:45', 'DR-001'),
('JDW-006', '2022-06-03', '09:45', '16:45', 'DR-001'),
('JDW-007', '2022-07-03', '16:45', '20:45', 'DR-001'),
('JDW-008', '2022-08-03', '16:45', '21:45', 'DR-001'),
('JDW-009', '2022-09-03', '09:45', '16:45', 'DR-001'),
('JDW-010', '2022-01-04', '10:45', '16:45', 'DR-002'),
('JDW-011', '2022-01-15', '09:45', '16:45', 'DR-003'),
('JDW-012', '2022-01-14', '09:45', '16:45', 'DR-003'),
('JDW-013', '2022-01-20', '11:45', '16:45', 'DR-004'),
('JDW-014', '2022-03-29', '09:45', '16:45', 'DR-001');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_obat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`) VALUES
('OBT-001', 'Malveius Obat Mata'),
('OBT-002', 'Etriksin Obat Kulit');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pasien` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_ktp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telepon_rumah` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tgl_buat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `email`, `username`, `password`, `jenis_kelamin`, `alamat`, `no_ktp`, `foto`, `no_hp`, `no_telepon_rumah`, `tgl_lahir`, `tgl_buat`) VALUES
('PSN-001', 'stephen', 'stephen@mail.com', 'stephen', '$2y$10$kXamKnIGSc/x8IAse5rYnuwAvl54oC.8e.XG.yy33/4fWGGvk2NBi', 'Laki-laki', 'Komplek PBB 01', '32146893456712395', 'user-3.jpg', '08132212988', '-', '2000-06-21', '2022-01-03'),
('PSN-002', 'charles', 'charles@mail.com', 'charles', '$2y$10$9.fr76DsvdXE8iPZB1ITgeiPllzYLlyoBbU417T.KdhQMx0bNHde2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-03'),
('PSN-003', 'carlos', 'carlos@gmail.com', 'carlos', '$2y$10$zQmIUzXLhYi5S/P7//v.juPdLikmrav2z1Cuot18aPvPiZ5ghm9i2', 'Laki-laki', 'Komplek Pbb 1', '1234567890123456', 'Screenshot_(166).jpg', '081322127897', '-', '2000-02-25', '2022-01-03'),
('PSN-004', 'yuda', 'yuda@gmail.com', 'yuda', '$2y$10$Q0GDBWG5uQ0wklE4tpn9C.AK3y1lxu4PKoCqTxsWkFQAy/xW.y0my', 'Laki-laki', 'boyolali\r\n', '123123124134324', 'pentagramimage.png', '082118324234', '0938204234234', '2000-06-14', '2022-01-03'),
('PSN-005', 'supeno', 'supeno@gmail.com', 'supeno', '$2y$10$ejLgzdaYXwbcU8S/ymfJ4uCL./GSFGumYbCgLoT0c.tv.avdf3T/y', 'Laki-laki', 'tegal rejo, rt 02/01\r\nkuwiran', '324234242342', 'ktp.JPG', '082118638580', '082118638580', '2000-10-26', '2022-01-03'),
('PSN-006', 'muhidin', 'muhidin@mail.com', 'muhidin', '$2y$10$9gpMxCnW807gt4o6SajUwupJK53gyqZ4Jz5YTKRBELQiSWU.8uPDK', 'Laki-laki', 'tegal rejo, rt 02/01\r\nkuwiran', '4234234234', 'foto_alvin.png', '082118638580', '-', '2000-03-01', '2022-01-03'),
('PSN-007', 'hadi', 'hadi@gmail.com', 'hadi', '$2y$10$8ba8XRRkcvtK2nydDWgqkO5QMxjiw261Wdt0zl9m3QNKBHeLz5gdq', 'Laki-laki', 'hgfjhsdgfjhs', '264876458345', 'sacai3_1.png', '234624234234', '18834624234', '2021-07-14', '2022-01-03'),
('PSN-008', 'sayoko', 'sayoko@gmail.com', 'sayoko', '$2y$10$EYj9iAh8CjUmVMjk3gYYW.mjPHMrCaDJ6/olMrNoXATm3yKdKso6q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-03'),
('PSN-009', 'dimasd', 'dimas@gmail.com', 'dimas', '$2y$10$lxuZ68Vz/lTan2kXB5xx5OwQnJWifa6mTs5UyQegAgLrdyzbujsIG', 'Laki-laki', 'tegal rejo, rt 02/01\r\nkuwiran', '1234567890123456', 'Haga_Ibnu_Hakim_2_3_Form_dan_BA_Revisi-2.png', '082118638580', '-', '2021-08-03', '2022-01-03'),
('PSN-010', 'Danang', 'danang@gmail.com', 'danangg', '$2y$10$FjSmdFOTDOr/PbEvhIy0tePptAjFkuoaesC7qmVQ0wmb00tyvAqbu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-03'),
('PSN-011', 'Darto', 'dartoo@gmail.com', 'dartoo', '$2y$10$R9Xh.bdeuGOgX7pxnxreeeAQMGSVT5ghmrBpNxWrD8vxcd4340UDu', 'Laki-laki', 'Jakarta', '1234567891012131', '1.jpg', '08123834718', '-', '2000-03-14', '2022-01-13'),
('PSN-012', 'Testing', 'test@mail.com', 'testing', '$2y$10$XmFr4Oyca9KuQ60i.twWdOLAF8dFsWK9cgLBOgLBGPCjJpxqNrAxW', 'Laki-laki', 'ABCDFDFDFDFDFW', '1234567891012131', '5.jpg', '0812321412412', '-', '1999-04-20', '2022-01-15'),
('PSN-013', 'Test Pasienn', 'test@mail.comm', 'testpasien', '$2y$10$JYJ9RHKB4bMSeh6fYT7YPOVYNG56AurT46Mx/raYwH70Jl68GdBke', 'Laki-laki', 'ABCD', '1234567891012131', '3.jpg', '08123834718', '-', '2000-04-20', '2022-01-15'),
('PSN-014', 'Dama', 'damaa@gmail.com', 'damaa', '$2y$10$m.2rV9tsdNegAm4h2FbzyuuTt59Xoi468OohkYurgVr.fEABaiwfe', 'Laki-laki', 'Blitar', '1234567891011121', '20048676-99047303161_2-s5-v1_(1).png', '08817819040', '-', '2000-04-20', '2022-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nominal` int(11) NOT NULL,
  `foto_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_bayar` enum('Terbayar','Belum dibayar') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum dibayar',
  `tgl_pembayaran` date DEFAULT NULL,
  `tgl_validasi` date DEFAULT NULL,
  `jam_validasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_admin` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `kode_bayar`, `nominal`, `foto_pembayaran`, `status_bayar`, `tgl_pembayaran`, `tgl_validasi`, `jam_validasi`, `id_admin`, `id_konsultasi`) VALUES
('PMB-001', '888875312849', 70000, 'download.jpg', 'Terbayar', NULL, NULL, '11:52', 'ADM-001', 'KST-002'),
('PMB-002', '888843280579', 70000, 'download1.jpg', 'Terbayar', NULL, NULL, '02:31', 'ADM-001', 'KST-003'),
('PMB-003', '888830829571', 70000, 'Screenshot_(166).jpg', 'Terbayar', NULL, NULL, '02:00', 'ADM-001', 'KST-004'),
('PMB-004', '888898465702', 70000, 'Screenshot_(166)1.jpg', 'Terbayar', NULL, NULL, '04:48', 'ADM-001', 'KST-005'),
('PMB-005', '888809876352', 70000, 'Screenshot_(166)2.jpg', 'Terbayar', NULL, NULL, '04:51', 'ADM-001', 'KST-006'),
('PMB-006', '888856321498', 70000, 'pentagramimage.png', 'Terbayar', NULL, NULL, '03:24', 'ADM-001', 'KST-007'),
('PMB-007', '888829178643', 70000, 'sacai3_1.png', 'Terbayar', NULL, NULL, NULL, NULL, 'KST-008'),
('PMB-008', '888849360257', 70000, 'pentagramimage1.png', 'Terbayar', NULL, NULL, '03:26', 'ADM-001', 'KST-009'),
('PMB-009', '888805891276', 70000, NULL, 'Belum dibayar', NULL, NULL, NULL, NULL, 'KST-010'),
('PMB-010', '888813658274', 70000, 'sacai3_11.png', 'Terbayar', NULL, NULL, '08:11', 'ADM-001', 'KST-011'),
('PMB-011', '888841028653', 70000, 'H.png', 'Terbayar', NULL, NULL, '10:23', 'ADM-001', 'KST-012'),
('PMB-012', '888873206495', 70000, 'undraw_Teaching_re_g7e3.png', 'Terbayar', '2022-03-10', '2022-03-13', '01:35', 'ADM-001', 'KST-013'),
('PMB-013', '888816784905', 70000, 'logo-white.png', 'Terbayar', '2022-03-13', '2022-03-16', '09:28', 'ADM-001', 'KST-014'),
('PMB-014', '888818347259', 70000, NULL, 'Belum dibayar', NULL, NULL, NULL, NULL, 'KST-015'),
('PMB-015', '888894058237', 70000, NULL, 'Belum dibayar', NULL, NULL, NULL, NULL, 'KST-016'),
('PMB-016', '888826840913', 0, 'cta-bg.png', 'Terbayar', '2022-03-16', '2022-03-16', '09:40', 'ADM-001', 'KST-017'),
('PMB-017', '888857839104', 0, NULL, 'Belum dibayar', NULL, NULL, NULL, NULL, 'KST-018'),
('PMB-018', '888868351420', 0, 'Branding_Its.png', 'Terbayar', '2022-03-20', '2022-03-20', '04:50', 'ADM-001', 'KST-019'),
('PMB-019', '888890385417', 0, '83ee787d8ff8aea6c4b2fe11aea7c7e4.png', 'Terbayar', '2022-03-27', '2022-03-27', '11:04', 'ADM-001', 'KST-020'),
('PMB-020', '888842813790', 0, '83ee787d8ff8aea6c4b2fe11aea7c7e41.png', 'Terbayar', '2022-03-29', '2022-03-29', '09:14', 'ADM-001', 'KST-021');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_konsultasi`
--

CREATE TABLE `pendaftaran_konsultasi` (
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_keluhan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Menunggu','Disetujui','Ubah jadwal','Dibatalkan','Selesai') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Menunggu',
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran_konsultasi`
--

INSERT INTO `pendaftaran_konsultasi` (`id_konsultasi`, `tanggal`, `jam`, `keluhan`, `foto_keluhan`, `meet`, `status`, `id_pasien`, `id_dokter`) VALUES
('KST-002', '2021-07-18', '13:00', 'Sakit kulit bawah mata', '1_41.jpg', 'https://meet.google.com/', 'Selesai', 'PSN-001', 'DR-001'),
('KST-003', '2021-07-21', '13:45', 'Cape', 'Screenshot_2020-11-10_092332.jpg', 'https://meet.google.com/', 'Selesai', 'PSN-001', 'DR-001'),
('KST-004', '2021-07-24', '09:45', 'Sakit telinga', 'download.jpg', 'https://meet.google.com/', 'Selesai', 'PSN-001', 'DR-001'),
('KST-005', '2021-07-28', '11:00', 'Ada jerawat', 'Screenshot_(166).jpg', 'https://meet.google.com/', 'Dibatalkan', 'PSN-003', 'DR-001'),
('KST-006', '2021-07-31', '13:00', 'Sakit jerawat', 'Screenshot_(166)1.jpg', 'https://meet.google.com/', 'Selesai', 'PSN-003', 'DR-001'),
('KST-007', '2021-07-29', '11:00', 'jerawat', 'pentagramimage.png', '', 'Selesai', 'PSN-004', 'DR-001'),
('KST-008', '2021-07-31', '11:00', 'jerawat', 'pentagramimage1.png', 'https://meet.google.com/bbt-tunv-bnx', 'Menunggu', 'PSN-004', 'DR-001'),
('KST-009', '2021-07-29', '11:00', 'jerawat', 'pentagramimage2.png', 'https://www.youtube.com/watch?v=NbvW5yPuA8k', 'Ubah jadwal', 'PSN-004', 'DR-001'),
('KST-010', '2021-07-28', '11:00', 'jerawat', 'foto_jerawat.jpg', 'https://meet.google.com/vvg-oobq-mcy', 'Menunggu', 'PSN-006', 'DR-001'),
('KST-011', '2021-07-31', '11:00', 'jerawat', 'sacai3_1.png', 'https://www.youtube.com/watch?v=NbvW5yPuA8k', 'Selesai', 'PSN-007', 'DR-001'),
('KST-012', '2021-08-30', '16:45', 'jerawat', 'Ha.png', 'google.meet', 'Dibatalkan', 'PSN-009', 'DR-001'),
('KST-013', '2022-04-03', '16:45', 'A', 'Square-Polaroid-Frame-PNG.png', '', 'Ubah jadwal', 'PSN-013', 'DR-001'),
('KST-014', '2022-05-03', '15:45', 'AAA', 'undraw_Teaching_re_g7e3.png', 'https://meet.google.com/uso-stuy-gye', 'Disetujui', 'PSN-013', 'DR-001'),
('KST-015', '2022-05-03', '16:45', 'AC', 'logo-white.png', 'https://meet.google.com/who-mrsq-qep', 'Menunggu', 'PSN-013', 'DR-001'),
('KST-016', '2022-05-03', '16:44', 'AVSC', 'undraw_Teaching_re_g7e3.png', 'https://meet.google.com/koo-lldv-uki', 'Menunggu', 'PSN-013', 'DR-001'),
('KST-017', '2022-05-03', '14:45', 'AC', 'phone2_-_Copy2.png', 'https://meet.google.com/uso-stuy-gye', 'Selesai', 'PSN-014', 'DR-001'),
('KST-018', '2022-05-03', '16:43', 'X', 'Alur_Aplikasi_SITASI.jpg', 'https://meet.google.com/kpj-pbgo-bof', 'Dibatalkan', 'PSN-014', 'DR-001'),
('KST-019', '2022-08-03', '20:45', 'Cek', 'Alur_Aplikasi_SITASI_2.jpg', 'Test 123', 'Selesai', 'PSN-014', 'DR-001'),
('KST-020', '2022-05-03', '12:45', 'ABC', '2d406c101084519_5f170c2bc293d.png', 'https://meet.google.com/cds-moxj-shy', 'Selesai', 'PSN-014', 'DR-001'),
('KST-021', '2022-09-03', '15:45', 'DEF', '2d406c101084519_5f170c2bc293d1.png', '', 'Selesai', 'PSN-014', 'DR-001');

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`) VALUES
(1, 'Poli Umum'),
(2, 'Poli Gigi'),
(3, 'Poli KIA (Kesehatan Ibu dan Anak)'),
(4, 'Poli MTBS (Manajemen Terpadu Balita Sakit)'),
(5, 'Laboratorium'),
(6, 'Fisioterapi'),
(7, 'Radiologi');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `feedback` text NOT NULL,
  `id_konsultasi` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `rating`, `feedback`, `id_konsultasi`) VALUES
(1, 5, 'Testa', 'KST-017'),
(2, 5, 'A', 'KST-019'),
(3, 4, 'nice', 'KST-020');

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE `rekam_medis` (
  `no_record` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekam_medis` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnosa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_pemeriksaan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_dokter` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_pasien` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_record`, `no_rekam_medis`, `tanggal`, `jam`, `diagnosa`, `foto_pemeriksaan`, `id_dokter`, `id_pasien`, `id_konsultasi`) VALUES
('RC-001', 1, '2022-03-14', '20:33', '123345', 'Square-Polaroid-Frame-PNG3.png', 'DR-001', 'PSN-001', 'KST-002'),
('RC-003', 1134125173, '2021-07-26', '12:00', 'Konsultasi Selesai', 'Screenshot_(166).jpg', 'DR-001', 'PSN-003', 'KST-006'),
('RC-004', 123213132, '2021-07-27', '12:00', 'Kurang menjaga kebersihan wajah', 'foto_jerawat.jpg', 'DR-001', 'PSN-004', 'KST-007'),
('RC-005', 123, '2022-03-15', '22:34', 'A', 'undraw_Teaching_re_g7e36.png', 'DR-001', 'PSN-007', 'KST-011'),
('RC-006', 123, '2022-03-20', '14:35', 'AX', 'Alur_Aplikasi_SITASI.jpg', 'DR-001', 'PSN-014', 'KST-017'),
('RC-007', 123, '2022-03-20', '16:59', 'AVC', 'Branding_Its2.png', 'DR-001', 'PSN-014', 'KST-019'),
('RC-008', 1234, '2022-03-27', '23:06', 'CDE', '7469017cd7e45ea2f16e0b9b0d92417d.png', 'DR-001', 'PSN-014', 'KST-020'),
('RC-009', NULL, NULL, NULL, NULL, NULL, 'DR-001', 'PSN-014', 'KST-021');

-- --------------------------------------------------------

--
-- Table structure for table `reschedule`
--

CREATE TABLE `reschedule` (
  `id_reschedule` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_reschedule` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_reschedule` date NOT NULL,
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reschedule`
--

INSERT INTO `reschedule` (`id_reschedule`, `jam_reschedule`, `tgl_reschedule`, `id_konsultasi`) VALUES
('RSC-001', '13:45', '2021-07-21', 'KST-003'),
('RSC-002', '09:45', '2021-07-24', 'KST-004'),
('RSC-003', '09:45', '2021-07-28', 'KST-005'),
('RSC-004', '09:45', '0000-00-00', 'KST-009');

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `id_resep` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_centang` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_centang` date DEFAULT NULL,
  `validasi_pasien` enum('Ditebus','Belum ditebus') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Belum ditebus',
  `id_konsultasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_admin_apotek` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resep`
--

INSERT INTO `resep` (`id_resep`, `jam_centang`, `tgl_centang`, `validasi_pasien`, `id_konsultasi`, `id_admin_apotek`) VALUES
('RSP-002', NULL, NULL, 'Belum ditebus', 'KST-004', NULL),
('RSP-004', NULL, NULL, 'Ditebus', 'KST-007', NULL),
('RSP-005', NULL, NULL, 'Ditebus', 'KST-011', NULL),
('RSP-006', NULL, NULL, 'Belum ditebus', 'KST-003', NULL),
('RSP-007', NULL, NULL, 'Belum ditebus', 'KST-017', NULL),
('RSP-008', NULL, NULL, 'Belum ditebus', 'KST-019', NULL),
('RSP-009', NULL, NULL, 'Belum ditebus', 'KST-020', NULL),
('RSP-010', NULL, NULL, 'Belum ditebus', 'KST-021', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id_antrian`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indexes for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD PRIMARY KEY (`id_detail_resep`),
  ADD KEY `detail_resep_id_obat_foreign` (`id_obat`),
  ADD KEY `detail_resep_id_resep_foreign` (`id_resep`),
  ADD KEY `detail_resep_id_konsultasi_foreign` (`id_konsultasi`),
  ADD KEY `detail_pasien_id_pasien_foreign` (`id_pasien`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id_feed`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `jadwal_id_dokter_foreign` (`id_dokter`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `pembayaran_id_admin_foreign` (`id_admin`),
  ADD KEY `pembayaran_id_konsultasi_foreign` (`id_konsultasi`);

--
-- Indexes for table `pendaftaran_konsultasi`
--
ALTER TABLE `pendaftaran_konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `pendaftaran_konsultasi_id_pasien_foreign` (`id_pasien`),
  ADD KEY `pendaftaran_konsultasi_id_dokter_foreign` (`id_dokter`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD KEY `id_konsultasi` (`id_konsultasi`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`no_record`),
  ADD KEY `rekam_medis_id_dokter_foreign` (`id_dokter`),
  ADD KEY `rekam_medis_id_pasien_foreign` (`id_pasien`),
  ADD KEY `rekam_medis_id_konsultasi_foreign` (`id_konsultasi`);

--
-- Indexes for table `reschedule`
--
ALTER TABLE `reschedule`
  ADD PRIMARY KEY (`id_reschedule`),
  ADD KEY `reschedule_id_konsultasi_foreign` (`id_konsultasi`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `resep_id_admin_apotek_foreign` (`id_admin_apotek`),
  ADD KEY `resep_id_konsultasi_kosnsultasi_foreign` (`id_konsultasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_resep`
--
ALTER TABLE `detail_resep`
  MODIFY `id_detail_resep` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `feed`
--
ALTER TABLE `feed`
  MODIFY `id_feed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `antrian`
--
ALTER TABLE `antrian`
  ADD CONSTRAINT `antrian_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `antrian_ibfk_2` FOREIGN KEY (`id_poli`) REFERENCES `poli` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_resep`
--
ALTER TABLE `detail_resep`
  ADD CONSTRAINT `detail_pasien_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_resep_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_resep_id_obat_foreign` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_resep_id_resep_foreign` FOREIGN KEY (`id_resep`) REFERENCES `resep` (`id_resep`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feed`
--
ALTER TABLE `feed`
  ADD CONSTRAINT `feed_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_id_admin_foreign` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran_konsultasi`
--
ALTER TABLE `pendaftaran_konsultasi`
  ADD CONSTRAINT `pendaftaran_konsultasi_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_konsultasi_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_id_dokter_foreign` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_id_pasien_foreign` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reschedule`
--
ALTER TABLE `reschedule`
  ADD CONSTRAINT `reschedule_id_konsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resep`
--
ALTER TABLE `resep`
  ADD CONSTRAINT `resep_id_admin_apotek_foreign` FOREIGN KEY (`id_admin_apotek`) REFERENCES `apoteker` (`id_admin_apotek`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resep_id_konsultasi_kosnsultasi_foreign` FOREIGN KEY (`id_konsultasi`) REFERENCES `pendaftaran_konsultasi` (`id_konsultasi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
