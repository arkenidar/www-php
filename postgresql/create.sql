
CREATE ROLE username WITH LOGIN SUPERUSER PASSWORD 'password';

-- DROP SCHEMA public;
CREATE SCHEMA public AUTHORIZATION pg_database_owner;
COMMENT ON SCHEMA public IS 'standard public schema';

CREATE TABLE public.person (
	id bigserial NOT NULL,
	nickname text NOT NULL,
	"password" text NOT NULL,
	CONSTRAINT person_pk_id PRIMARY KEY (id),
	CONSTRAINT person_unique_nickname UNIQUE (nickname)
);

INSERT INTO public.person (nickname,"password") VALUES
	 ('dario','bliss'),
	 ('root','strong-password');
