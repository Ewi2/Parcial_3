--
-- PostgreSQL database dump
--

-- Dumped from database version 16.1
-- Dumped by pg_dump version 16.1

-- Started on 2024-06-07 21:46:10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

DROP DATABASE gnosisweb;
--
-- TOC entry 4880 (class 1262 OID 17625)
-- Name: gnosisweb; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE gnosisweb WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_El Salvador.1252';


ALTER DATABASE gnosisweb OWNER TO postgres;

\connect gnosisweb

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 4864 (class 0 OID 17660)
-- Dependencies: 221
-- Data for Name: cache; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 4865 (class 0 OID 17667)
-- Dependencies: 222
-- Data for Name: cache_locks; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 4874 (class 0 OID 17722)
-- Dependencies: 231
-- Data for Name: equipos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.equipos (id, area, rol, nomb_desarrollador, info_personal, proyecto_trabajado, created_at, updated_at) VALUES (4, 'Diseño', 'Dibujante y animador', 'Diego Alejandro', 'Mi nombre es diego y mi pasión es el dibujo. Me encanta dibujar y expresar las ideas que tengo.', 'Gnosis', '2024-06-04 16:14:34', '2024-06-04 16:14:34');
INSERT INTO public.equipos (id, area, rol, nomb_desarrollador, info_personal, proyecto_trabajado, created_at, updated_at) VALUES (5, 'Diseño', 'Diseñador de sonido', 'Rony Josué', 'Hola, mi nombre es Rony. Mi pasión es el sonido. Quiero hacer este videojuego lo más realista posible. Quiero incorporar sonidos reales y que el jugador se transporte dentro del videojuego.', 'Gnosis', '2024-06-04 16:16:03', '2024-06-04 16:16:03');
INSERT INTO public.equipos (id, area, rol, nomb_desarrollador, info_personal, proyecto_trabajado, created_at, updated_at) VALUES (6, 'Desarrollo', 'Desarrollador', 'Francisco', 'Mi nombre es Francisco. Mi tarea es una de las más complejas en el desarrollo del juego, pero, también es una de las más recompensantes. Quiero transmitirle al jugador ese sentido de fluidez dentro de la jugabilidad.', 'Gnosis', '2024-06-04 16:17:44', '2024-06-04 16:17:44');
INSERT INTO public.equipos (id, area, rol, nomb_desarrollador, info_personal, proyecto_trabajado, created_at, updated_at) VALUES (7, 'Desarrollo', 'Desarrollador', 'Edwin González', 'Mi nombre es Edwin. Mi tarea es entender el código y saber escribirlo. Dentro de mi trabajo, me encargo de entregarle una jugabilidad cómoda y fácil de entender al jugador.', 'Gnosis', '2024-06-04 16:18:53', '2024-06-04 16:18:53');


--
-- TOC entry 4870 (class 0 OID 17692)
-- Dependencies: 227
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 4868 (class 0 OID 17684)
-- Dependencies: 225
-- Data for Name: job_batches; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 4867 (class 0 OID 17675)
-- Dependencies: 224
-- Data for Name: jobs; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 4859 (class 0 OID 17627)
-- Dependencies: 216
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.migrations (id, migration, batch) VALUES (1, '0001_01_01_000000_create_users_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (2, '0001_01_01_000001_create_cache_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (3, '0001_01_01_000002_create_jobs_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (4, '2024_05_25_230658_create_proyectos_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (5, '2024_05_25_230711_create_equipo_table', 1);
INSERT INTO public.migrations (id, migration, batch) VALUES (6, '2024_05_28_043400_create_equipos_table', 2);


--
-- TOC entry 4862 (class 0 OID 17644)
-- Dependencies: 219
-- Data for Name: password_reset_tokens; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 4872 (class 0 OID 17704)
-- Dependencies: 229
-- Data for Name: proyectos; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.proyectos (id, tipo_tarea, desc_encargados, herramientas_utilizadas, descripcion, imagen, tiempo_empleado, created_at, updated_at) VALUES (6, 'Diseño de personaje', 'Lindys Arely', 'Papel bond y lápiz', 'Se hizo el boceto del personaje principal el cual es un astronauta. Se tuvo que simplificar un poco su diseño para que pueda ser flexible con el juego.', 'N/A', '5', '2024-06-08 03:16:34', '2024-06-08 03:16:34');
INSERT INTO public.proyectos (id, tipo_tarea, desc_encargados, herramientas_utilizadas, descripcion, imagen, tiempo_empleado, created_at, updated_at) VALUES (7, 'Codificación', 'Francisco Javier, Edwin René', 'Godot', 'Con GDScript se hizo la implementación de las funcionalidades del enemigo. Estas son el ataque, movimiento y detección del peronaje.', 'N/A', '9', '2024-06-08 03:19:39', '2024-06-08 03:19:39');
INSERT INTO public.proyectos (id, tipo_tarea, desc_encargados, herramientas_utilizadas, descripcion, imagen, tiempo_empleado, created_at, updated_at) VALUES (8, 'Diseño de escenario', 'Diego Alejandro', 'Procreate para tablet', 'En la aplicación de Procreate, se hizo el diseño del escenario principal. Este se hizo en varias capas, el escenario como la capa más al fondo, y lianas y ramas como las capas de enfrente. Todo esto para darle una inmersión mayor al jugador.', 'N/A', '9', '2024-06-08 03:29:11', '2024-06-08 03:29:11');
INSERT INTO public.proyectos (id, tipo_tarea, desc_encargados, herramientas_utilizadas, descripcion, imagen, tiempo_empleado, created_at, updated_at) VALUES (9, 'Funcionalidades programadas', 'Cristian Yahir', 'GDScript', 'En el código de GDScript se implementaron varias funcionalidades que complementan la jugabilidad del personaje principal. Estas funcionalidades son: La barra de salud, objetos varios y ataques para el jugador principal.', 'N/A', '12', '2024-06-08 03:44:23', '2024-06-08 03:44:23');


--
-- TOC entry 4863 (class 0 OID 17651)
-- Dependencies: 220
-- Data for Name: sessions; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES ('1CXpjplXcPsAtPP5KgFayIlVvBnVdqKlp3UbSoy6', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoia1daWThtdzRBQTFkUVlBWmhLdk11QVJibGR6dFQ1M2VXbGFXTVlidyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1717813047);
INSERT INTO public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES ('37YLUAXVcWORQLgaREx2vSNQ1b0YkCfQ1mG3qZE2', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUpyOWpTc2lCMERVTWlFZ25qakdONlRCazFTMVliMGhiaFlDYUVuYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmZvR2VuZXJhbCI7fX0=', 1717523231);
INSERT INTO public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES ('KicCez6XMyXpmAPjtPuQARnxS5JC8WD2cc3LnKTw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVWFTS2Z2VlR2VFU2SlkxSDNpQklkTkRoUHRBV0IwRW95M2w2OXprbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717737326);
INSERT INTO public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES ('pjVA4Cssl0dtjXxH0aGTLiEpPWCKqadXrg32TvbD', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNUo5dTBPOE55S1BvYk5KT3RtTWNGOXVxN0J4VEduZlZQdnZqNlJFbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm95ZWN0b3MiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1717818266);
INSERT INTO public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) VALUES ('u4JWXoM22tlub8QJRHaXd1tmnhpLgcunj6LepchN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibHFBUGF1TFJOSEdsNXh3VnVnVnp4cXRMaWZIVFRxN2w5cHlXRWM4ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmZvR2VuZXJhbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1717746231);


--
-- TOC entry 4861 (class 0 OID 17634)
-- Dependencies: 218
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (4, 'UserGnosis_Desarrollador1', 'dev1@gnosis.com', NULL, '$2y$12$vKdtYacp8AV7HogC.Ewix.BZaa1PPlOcGGtQRkwMIN8Plfpi3lb/G', NULL, '2024-06-08 02:17:27', '2024-06-08 02:17:27');
INSERT INTO public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (5, 'UserGnosis_Desarrollador2', 'dev2@gnosis.com', NULL, '$2y$12$nfOzPRPL9FWklz3.SdncEO/OjH9.sNLjoj82896P7xoLHqPfDHsiS', NULL, '2024-06-08 02:19:26', '2024-06-08 02:19:26');
INSERT INTO public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (6, 'UserGnosis_Desarrollador3', 'dev3@gnosis.com', NULL, '$2y$12$pTVci1lN9Ccq0enYZVVyS.wVPxmWe/KhZ4SulYroTvCwSLLLhNqkq', NULL, '2024-06-08 02:21:28', '2024-06-08 02:21:28');
INSERT INTO public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (7, 'UserGnosis_Desarrollador4', 'dev4@gnosis.com', NULL, '$2y$12$Lp9l6qZ2Xr9WdeWDgzo.PeC/Z0A2zYfyxS7JHOq25GbtZ.UtFixjW', NULL, '2024-06-08 02:21:54', '2024-06-08 02:21:54');


--
-- TOC entry 4887 (class 0 OID 0)
-- Dependencies: 230
-- Name: equipos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.equipos_id_seq', 7, true);


--
-- TOC entry 4888 (class 0 OID 0)
-- Dependencies: 226
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- TOC entry 4889 (class 0 OID 0)
-- Dependencies: 223
-- Name: jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);


--
-- TOC entry 4890 (class 0 OID 0)
-- Dependencies: 215
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.migrations_id_seq', 6, true);


--
-- TOC entry 4891 (class 0 OID 0)
-- Dependencies: 228
-- Name: proyectos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.proyectos_id_seq', 9, true);


--
-- TOC entry 4892 (class 0 OID 0)
-- Dependencies: 217
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 7, true);


-- Completed on 2024-06-07 21:46:10

--
-- PostgreSQL database dump complete
--

