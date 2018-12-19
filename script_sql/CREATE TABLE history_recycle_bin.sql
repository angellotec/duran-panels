/*DROP TABLE IF EXISTS history_recycle_bin;*/

CREATE TABLE history_recycle_bin
(
	message TEXT NOT NULL,
    delete_date DATE NOT NULL,
    delete_time TIME NOT NULL
);