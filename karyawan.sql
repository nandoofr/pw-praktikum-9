SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `karyawan`
(
    `id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `address` varchar(255) NOT NULL,
    `gender` varchar(255) NOT NULL,
    `position` varchar(255) NOT NULL,
    `status` varchar(255) NOT NULL
)

ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `karyawan`
(`id`, `name`, `email`, `address`, `gender`, `position`, `status`)
VALUES
(12, 'hakam', 'hakam@gmail.com', 'bogor', 'Male', 'UI/UX', 'Fulltime'),
(14, 'boy', 'boy@gmail.com', 'banten', 'Male', 'QA', 'Intern');

ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;