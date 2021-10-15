CREATE TABLE posts (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(255) NOT NULL,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE post_like (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  post_id INTEGER NOT NULL,
  ip VARCHAR(255) NOT NULL,
  created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,

  FOREIGN KEY (post_id) REFERENCES post(id)
);

CREATE TABLE categories (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  name VARCHAR(255) NOT NULL
);

CREATE TABLE post_category (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  post_id INTEGER NOT NULL,
  category_id INTEGER NOT NULL,

  FOREIGN KEY (post_id) REFERENCES post(id),
  FOREIGN KEY (category_id) REFERENCES categories(id)
);


CREATE TABLE post_colors (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  post_id INTEGER NOT NULL,
  color VARCHAR(7) NOT NULL,

  FOREIGN KEY (post_id) REFERENCES post(id)
);

-- MOCK DATA --
insert into posts (name) values ('Tortoise, indian star');
insert into posts (name) values ('Gull, pacific');
insert into posts (name) values ('Hawk-eagle, crowned');
insert into posts (name) values ('Red-winged blackbird');
insert into posts (name) values ('Constrictor, eastern boa');
insert into posts (name) values ('Common seal');
insert into posts (name) values ('Mexican beaded lizard');
insert into posts (name) values ('Jabiru stork');
insert into posts (name) values ('Blackbuck');
insert into posts (name) values ('Crab (unidentified)');

insert into post_colors (post_id, color) values (1, '#61f966');
insert into post_colors (post_id, color) values (1, '#d39d27');
insert into post_colors (post_id, color) values (1, '#f2d310');
insert into post_colors (post_id, color) values (1, '#d6e5ae');
insert into post_colors (post_id, color) values (1, '#f0b915');

insert into post_colors (post_id, color) values (2, '#4d7ead');
insert into post_colors (post_id, color) values (2, '#debeff');
insert into post_colors (post_id, color) values (2, '#f2727d');
insert into post_colors (post_id, color) values (2, '#96ad4c');
insert into post_colors (post_id, color) values (2, '#7a0ff0');

insert into post_colors (post_id, color) values (3, '#a6feb4');
insert into post_colors (post_id, color) values (3, '#77e21c');
insert into post_colors (post_id, color) values (3, '#9fe059');
insert into post_colors (post_id, color) values (3, '#b3ae00');
insert into post_colors (post_id, color) values (3, '#48e143');

insert into post_colors (post_id, color) values (4, '#621b8f');
insert into post_colors (post_id, color) values (4, '#0a41ce');
insert into post_colors (post_id, color) values (4, '#78df96');
insert into post_colors (post_id, color) values (4, '#b9966d');
insert into post_colors (post_id, color) values (4, '#5f4a2c');


insert into post_colors (post_id, color) values (5, '#401ecc');
insert into post_colors (post_id, color) values (5, '#3c0ae3');
insert into post_colors (post_id, color) values (5, '#37393d');
insert into post_colors (post_id, color) values (5, '#cd66ad');
insert into post_colors (post_id, color) values (5, '#16bc15');

insert into post_colors (post_id, color) values (6, '#812afe');
insert into post_colors (post_id, color) values (6, '#a518a6');
insert into post_colors (post_id, color) values (6, '#f037fa');
insert into post_colors (post_id, color) values (6, '#980a28');
insert into post_colors (post_id, color) values (6, '#fd1e8e');


insert into post_colors (post_id, color) values (7, '#8e4436');
insert into post_colors (post_id, color) values (7, '#975786');
insert into post_colors (post_id, color) values (7, '#18f0ff');
insert into post_colors (post_id, color) values (7, '#d4b4a8');
insert into post_colors (post_id, color) values (7, '#63b54a');

insert into post_colors (post_id, color) values (8, '#5480af');
insert into post_colors (post_id, color) values (8, '#855ee8');
insert into post_colors (post_id, color) values (8, '#a615f9');
insert into post_colors (post_id, color) values (8, '#d33831');
insert into post_colors (post_id, color) values (8, '#b93ec8');


insert into post_colors (post_id, color) values (9, '#4effe0');
insert into post_colors (post_id, color) values (9, '#ddf5fa');
insert into post_colors (post_id, color) values (9, '#304c18');
insert into post_colors (post_id, color) values (9, '#319bd2');
insert into post_colors (post_id, color) values (9, '#892449');

insert into post_colors (post_id, color) values (10, '#abee70');
insert into post_colors (post_id, color) values (10, '#120670');
insert into post_colors (post_id, color) values (10, '#faf689');
insert into post_colors (post_id, color) values (10, '#3ab978');
insert into post_colors (post_id, color) values (10, '#7ed2f1');
