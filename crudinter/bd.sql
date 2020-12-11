

USE logycrudd;
CREATE TABLE `t_gastos` (
  `id` int(50) NOT NULL,
  `concepto` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cantidad` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `fecha` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

ALTER TABLE `t_gastos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `t_gatos`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;