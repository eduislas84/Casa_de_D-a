CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
);


INSERT INTO `usuarios` (`id_usuario`, `username`, `password`) VALUES
(1, 'Eduardo', '123');
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
