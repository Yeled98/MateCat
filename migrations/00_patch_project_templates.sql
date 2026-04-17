-- Parche de base de datos para sincronizar project_templates con la UI (React)
-- Fecha: Abril 2026
-- Problema: Error 500 en /api/v3/project-template/ por columnas inexistentes.
-- Solución: Agregar las columnas de configuración que envía el frontend.

USE matecat;

ALTER TABLE project_templates 
    ADD COLUMN IF NOT EXISTS tm_prioritization tinyint(1) NOT NULL DEFAULT 0, 
    ADD COLUMN IF NOT EXISTS dialect_strict tinyint(1) NOT NULL DEFAULT 0, 
    ADD COLUMN IF NOT EXISTS public_tm_penalty int NOT NULL DEFAULT 0, 
    ADD COLUMN IF NOT EXISTS mt_quality_value_in_editor int DEFAULT NULL, 
    ADD COLUMN IF NOT EXISTS character_counter_count_tags tinyint(1) NOT NULL DEFAULT 0, 
    ADD COLUMN IF NOT EXISTS character_counter_mode varchar(50) DEFAULT NULL, 
    ADD COLUMN IF NOT EXISTS subfiltering_handlers text DEFAULT NULL, 
    ADD COLUMN IF NOT EXISTS icu_enabled tinyint(1) NOT NULL DEFAULT 0;
