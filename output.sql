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
-- Name: scriptures; Type: TABLE; Schema: public; Owner: qbcusmcyawugka
--

CREATE TABLE scriptures (
    id integer NOT NULL,
    book character varying(100),
    chapter integer NOT NULL,
    verse integer NOT NULL,
    content text NOT NULL
);


ALTER TABLE scriptures OWNER TO qbcusmcyawugka;

--
-- Name: scriptures_id_seq; Type: SEQUENCE; Schema: public; Owner: qbcusmcyawugka
--

CREATE SEQUENCE scriptures_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE scriptures_id_seq OWNER TO qbcusmcyawugka;

--
-- Name: scriptures_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: qbcusmcyawugka
--

ALTER SEQUENCE scriptures_id_seq OWNED BY scriptures.id;


--
-- Name: tutorial; Type: TABLE; Schema: public; Owner: qbcusmcyawugka
--

CREATE TABLE tutorial (
    id integer NOT NULL,
    user_id integer NOT NULL,
    tutorial_text text NOT NULL,
    title character varying(100)
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
-- Name: scriptures id; Type: DEFAULT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY scriptures ALTER COLUMN id SET DEFAULT nextval('scriptures_id_seq'::regclass);


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
1	do_everything
2	view_advanced
3	view_beginner
\.


--
-- Name: permission_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('permission_id_seq', 3, true);


--
-- Data for Name: role; Type: TABLE DATA; Schema: public; Owner: qbcusmcyawugka
--

COPY role (id, name, permission_id) FROM stdin;
1	super_user	1
2	advanced_user	2
3	beginner_user	3
\.


--
-- Name: role_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('role_id_seq', 4, true);


--
-- Data for Name: scriptures; Type: TABLE DATA; Schema: public; Owner: qbcusmcyawugka
--

COPY scriptures (id, book, chapter, verse, content) FROM stdin;
1	John	1	5	The light shines in the darkness, and the darkness has not overcome it.
2	Doctrine and Covenants	88	49	The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.
3	Doctrine and Covenants	93	28	He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.
4	Mosiah	16	9	He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.
\.


--
-- Name: scriptures_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('scriptures_id_seq', 4, true);


--
-- Data for Name: tutorial; Type: TABLE DATA; Schema: public; Owner: qbcusmcyawugka
--

COPY tutorial (id, user_id, tutorial_text, title) FROM stdin;
1	1	Basic Backhand Tutorial.	Backhand
5	1	Continental - Index knuckle on bevel number 2. Used for serves, forehand volley, backhand volley and a slice backhand. \nEastern Forehand Grip - Index on bevel number 3. Used as a forehand grip. It is also suitable as forehand volley grip.\nSemi-western Forehand Grip- Index knuckle on bevel number 4. Used as a forehand grip. Suitable for hitting high forehands. \nWestern Forehand Grip - Index knuckle on bevel number 5. Primarily used as a forehand grip to apply lots of topspin. \nTwo Handed Backhand Grip - The right hand will use a continental grip. The left hand will use a semi-western forehand grip. \nEastern Backhand Grip - This grip is used for the one-handed backhand. The index knuckle is placed on bevel number 1.\n	Grips
2	1	The way I hit my forehand is similar to that of Federer. I use modified eastern grip, with the index finger slightly separated from the rest of the fingers. My index knuckle is on bevel number 3 while the heel pad of the same hand in the middle of bevels number 3 and 2. \nFirst is the unit turn. I turn my shoulders so that my torso is perpendicular to the net. As I perform the unit turn, I also extend my non-racquet hand parallel to the baseline. As I do this, I also bend my knees to store energy. I am now ready to uncoil and hit the ball. I try to be in this position just as the ball bounces on my side of the net. I explode as the ball rises. I push off my right foot and begin my swing. After I make contact with the ball, I try and catch the racquet with my non-racquet hand.\n	Forehand
\.


--
-- Name: tutorial_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('tutorial_id_seq', 5, true);


--
-- Data for Name: user; Type: TABLE DATA; Schema: public; Owner: qbcusmcyawugka
--

COPY "user" (id, first_name, last_name, username, password, display_name, role_id) FROM stdin;
9	User	One	Mosiah	$2y$10$7XE5m9eI22ePlZzxRj9sD.P6YMU/PYw7R6N/i..5ClkGTSE7gpek.	Mosiah	3
7	Roger	Federer	GOAT	$2y$10$8SNK4AiIUPBjRwVl/G1zvev.Dg1/Bdoq31OEsVhL2N46sjZcItXxW	RF	1
1	Mosiah	Querubin	Mosiah10s	federer	Mosiah Querubin	2
2	Kambren	Rowlan	KellyRowland	super	Kam	1
5	Rafa	Nadal	Man	$2y$10$Sa2VYuTpD3o6QVn6BMoo2uIymkkdkqCs8JetVKohs1odW04xIZ7Sy	Mann	3
10	Alex	Zverev	AlexZ	$2y$10$hCjqkGoolOJST2gE480z4.AL015NaCzoEervKpPNhNQc4uCU5pBGO	AZZ	3
6	A	B	A	$2y$10$zgj8oRoNy4OjLjhYu8n0qeSK6sYRGpj8bAUxh9i4sdRNCSh/6v7qy	A	3
8	Boyd	Querubin	Boding	$2y$10$x/OKIDE1/YvtSNEwdvfh4uh4Wuv17vvJz51Alfrbk4K6ekXKl6zrm	BB	2
11	Juan	Delpo	Delpo	$2y$10$jZpdPtu.RkGluqEtUTXfQu3nz71cpFcpddkXSFkkR3FuCWVA0TsAK	Delpo	2
\.


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: qbcusmcyawugka
--

SELECT pg_catalog.setval('user_id_seq', 11, true);


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
-- Name: scriptures scriptures_pkey; Type: CONSTRAINT; Schema: public; Owner: qbcusmcyawugka
--

ALTER TABLE ONLY scriptures
    ADD CONSTRAINT scriptures_pkey PRIMARY KEY (id);


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

