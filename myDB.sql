--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.4
-- Dumped by pg_dump version 9.6.4

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: permission; Type: TABLE; Schema: public; Owner: qbcusmcyawugka
--

CREATE TABLE permission (
    id integer NOT NULL,
    name character varying(100) NOT NULL
);


ALTER TABLE permission OWNER TO qbcusmcyawugka;

--
-- Name: permission_id_seq; Type: SEQUENCE; Schema: public; Owner: qbcusmcyawugka
--

CREATE SEQUENCE permission_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE permission_id_seq OWNER TO qbcusmcyawugka;

--
-- Name: permission_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: qbcusmcyawugka
--

ALTER SEQUENCE permission_id_seq OWNED BY permission.id;


--
-- Name: role; Type: TABLE; Schema: public; Owner: qbcusmcyawugka
--

CREATE TABLE role (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    permission_id integer NOT NULL
);


ALTER TABLE role OWNER TO qbcusmcyawugka;

--
-- Name: role_id_seq; Type: SEQUENCE; Schema: public; Owner: qbcusmcyawugka
--

CREATE SEQUENCE role_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE role_id_seq OWNER TO qbcusmcyawugka;

--
-- Name: role_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: qbcusmcyawugka
--

ALTER SEQUENCE role_id_seq OWNED BY role.id;


--
-- Name: tutorial; Type: TABLE; Schema: public; Owner: qbcusmcyawugka
--

CREATE TABLE tutorial (
    id integer NOT NULL,
    user_id integer NOT NULL,
    tutorial_text text NOT NULL
);


ALTER TABLE tutorial OWNER TO qbcusmcyawugka;

--
-- Name: tutorial_id_seq; Type: SEQUENCE; Schema: public; Owner: qbcusmcyawugka
--

CREATE SEQUENCE tutorial_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE tutorial_id_seq OWNER TO qbcusmcyawugka;

--
-- Name: tutorial_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: qbcusmcyawugka
--

ALTER SEQUENCE tutorial_id_seq OWNED BY tutorial.id;


--
-- Name: user; Type: TABLE; Schema: public; Owner: qbcusmcyawugka
--

CREATE TABLE "user" (
    id integer NOT NULL,
    first_name character varying(100) NOT NULL,
    last_name character varying(100) NOT NULL,
    username character varying(100) NOT NULL,
    password character varying(100) NOT NULL,
    display_name character varying(100) NOT NULL,
    role_id integer NOT NULL
);


ALTER TABLE "user" OWNER TO qbcusmcyawugka;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: public; Owner: qbcusmcyawugka
--

CREATE SEQUENCE user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE user_id_seq OWNER TO qbcusmcyawugka;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: qbcusmcyawugka
--

ALTER SEQUENCE user_id_seq OWNED BY "user".id;


--
-- Name: permission id; Type: DEFAULT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY permission ALTER COLUMN id SET DEFAULT nextval('permission_id_seq'::regclass);


--
-- Name: role id; Type: DEFAULT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY role ALTER COLUMN id SET DEFAULT nextval('role_id_seq'::regclass);


--
-- Name: tutorial id; Type: DEFAULT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY tutorial ALTER COLUMN id SET DEFAULT nextval('tutorial_id_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY "user" ALTER COLUMN id SET DEFAULT nextval('user_id_seq'::regclass);


--
-- Data for Name: permission; Type: TABLE DATA; Schema: public; Owner: qbcusmcyawugka
--

COPY permission (id, name) FROM stdin;
\.


--
-- Name: permission_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('permission_id_seq', 1, false);


--
-- Data for Name: role; Type: TABLE DATA; Schema: public; Owner: qbcusmcyawugka
--

COPY role (id, name, permission_id) FROM stdin;
\.


--
-- Name: role_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('role_id_seq', 1, false);


--
-- Data for Name: tutorial; Type: TABLE DATA; Schema: public; Owner: qbcusmcyawugka
--

COPY tutorial (id, user_id, tutorial_text) FROM stdin;
\.


--
-- Name: tutorial_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('tutorial_id_seq', 1, false);


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: qbcusmcyawugka
--

COPY "user" (id, first_name, last_name, username, password, display_name, role_id) FROM stdin;
\.


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('user_id_seq', 1, false);


--
-- Name: permission permission_name_key; Type: CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY permission
    ADD CONSTRAINT permission_name_key UNIQUE (name);


--
-- Name: permission permission_pkey; Type: CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY permission
    ADD CONSTRAINT permission_pkey PRIMARY KEY (id);


--
-- Name: role role_name_key; Type: CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY role
    ADD CONSTRAINT role_name_key UNIQUE (name);


--
-- Name: role role_pkey; Type: CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY role
    ADD CONSTRAINT role_pkey PRIMARY KEY (id);


--
-- Name: tutorial tutorial_pkey; Type: CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY tutorial
    ADD CONSTRAINT tutorial_pkey PRIMARY KEY (id);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: user user_username_key; Type: CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_username_key UNIQUE (username);


--
-- Name: role role_permission_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY role
    ADD CONSTRAINT role_permission_id_fkey FOREIGN KEY (permission_id) REFERENCES permission(id);


--
-- Name: tutorial tutorial_user_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY tutorial
    ADD CONSTRAINT tutorial_user_id_fkey FOREIGN KEY (user_id) REFERENCES "user"(id);


--
-- Name: user user_role_id_fkey; Type: FK CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY "user"
    ADD CONSTRAINT user_role_id_fkey FOREIGN KEY (role_id) REFERENCES role(id);


--
-- Name: public; Type: ACL; Schema: -; Owner: qbcusmcyawugka
--

REVOKE ALL ON SCHEMA public FROM postgres;
REVOKE ALL ON SCHEMA public FROM PUBLIC;
GRANT ALL ON SCHEMA public TO qbcusmcyawugka;
GRANT ALL ON SCHEMA public TO PUBLIC;


--
-- Name: plpgsql; Type: ACL; Schema: -; Owner: postgres
--

GRANT ALL ON LANGUAGE plpgsql TO qbcusmcyawugka;


--
-- PostgreSQL database dump complete
--

