ALTER TABLE `files` DROP FOREIGN KEY `files_ibfk_1`; ALTER TABLE `files` ADD CONSTRAINT `files_ibfk_1` FOREIGN KEY (`id_requirement`) REFERENCES `requirements`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
ALTER TABLE `keys` ADD  CONSTRAINT `fk_req` FOREIGN KEY (`id_requirement`) REFERENCES `requirements`(`id`) ON DELETE CASCADE ON UPDATE RESTRICT;