

CREATE TABLE admin (
  id int(11) NOT NULL,
  username varchar(50) NOT NULL,
  password varchar(60) NOT NULL,
  firstname varchar(50) NOT NULL,
  lastname varchar(50) NOT NULL,
  photo varchar(150) NOT NULL,
  created_on date NOT NULL
) 


INSERT INTO admin (id, username, password, firstname, lastname, photo, created_on) VALUES
(1, 'admin', '$2y$10$oqdw1palKnBL28J/yvOIRug3JgJLi4NSkAZUn.xuQBfZRJdownaEq', 'admin', 'admin', 'appl.png', '2022-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `platform` text NOT NULL,
  `status` enum('YES','NO') NOT NULL,
  `email` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `position_id`, `firstname`, `lastname`, `photo`, `platform`, `status`, `email`) VALUES
(18, 8, 'Zack', 'zack', '', 'xyz', 'YES', 'xzy@gmail.com'),
(19, 8, 'John', 'John', '', 'asdasd', 'YES', 'xzy1@gmail.com'),
(20, 9, 'james', 'andrew', '', 'adasda\r\n', 'YES', 'xyzx1@gmail.com'),
(21, 9, 'sadas', 'sadasd', '', 'sadasd', 'YES', 'zxzc@gmail.com'),
(22, 9, 'james', 'johnson', '', 'asdasd', 'YES', 'asd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `max_vote` int(11) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `description`, `max_vote`, `priority`) VALUES
(8, 'President', 2, 1),
(9, 'Vice President', 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `firstname` longtext NOT NULL,
  `lastname` longtext NOT NULL,
  `photo` longtext NOT NULL,
  `email` longtext NOT NULL,
  `about` longtext NOT NULL,
  `profilelink` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `firstname`, `lastname`, `photo`, `email`, `about`, `profilelink`) VALUES
(3, 'Sireesh', 'Reddy', 'sireesh.jpg', 'sireeshreddy1999@gmail.com', 'Student', 'sireeshreddy1999@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `voters_id` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `email` longtext NOT NULL,
  `proof` longtext NOT NULL,
  `status` enum('YES','NO') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `voters_id`, `password`, `firstname`, `lastname`, `photo`, `email`, `proof`, `status`) VALUES
(2, 'drjb8nR4aJlzg5Y', '$2y$10$K0EX2H6N9AmQeCTF7L.q.uZldv2tMAlVQ6ylJybhC0GHKFFmLqx36', 'xyz', 'xyz', 'banner.jpeg', 'xyz@xyz.com', '', 'YES'),
(3, 'JsdzaI7KkfhQt5V', '$2y$10$5eaAhZM6AvhcLDIhcipZLeP1zT6bsNISjs0p5L7j5L5EkMFKgeUuG', 'sample', 'sample', '', 'asd@gmail.com', '', 'YES'),
(9, 'LWVwuEeI7iGFDQo', '$2y$10$O7W8A37Y/kYQXBXWrMJmEeaB2JpbRI1K4YqBQpl7c1KFGE1MeEV0y', 'asd@gmail.com', 'asd@gmail.com', '', 'asd1@gmail.com', '', 'NO'),
(10, 'OucLjwAnsWUQYK8', '$2y$10$wq68x2Enb6.TfjmKNk13Ou0xys4Tf0Ijfn0zKNXGNbkyVh8urWUj2', 'Nikhil ', 'Kumar', '', 'nikhil.chinna2911@gmail.com', '', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `voters_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
