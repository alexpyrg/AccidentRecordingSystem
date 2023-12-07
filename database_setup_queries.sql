CREATE TABLE IF NOT EXISTS vehicle_color(id integer PRIMARY KEY,description text);
COPY vehicle_color(id,description)
FROM 'C:\Users\user\Desktop\Yliko\vehicle_csv_renamed\vehicle_color.csv'
DELIMITER ','
CSV HEADER; -- Vehicle

CREATE TABLE IF NOT EXISTS road_cycle_facilities(id integer PRIMARY KEY,description text);
COPY road_cycle_facilities(id,description)
FROM 'C:\Users\user\Desktop\Yliko\road_cycle_facilities.csv'
DELIMITER ','
CSV HEADER; --address

CREATE TABLE IF NOT EXISTS road_carriageway_type(id integer PRIMARY KEY,description text);
COPY road_carriageway_type(id,description)
FROM 'C:\Users\user\Desktop\Yliko\road_carriageway_type.csv'
DELIMITER ','
CSV HEADER; --address

CREATE TABLE IF NOT EXISTS accident_most_harmful_event(id integer PRIMARY KEY,descriptionord integer, collisiontype text, description text);
COPY most_harmful_event(id,descriptionorder,collisiontype,description)
FROM 'C:\Users\user\Desktop\Yliko\most_harmful_event.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS first_harmful_event(id integer PRIMARY KEY,descriptionord integer, collisiontype text, description text);
COPY first_harmful_event(id,descriptionorder,collisiontype,description)
FROM 'C:\Users\user\Desktop\Yliko\first_harmful_event.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS vehicle_firefighting_equipment_used(id integer PRIMARY KEY, description text);
COPY vehicle_firefighting_equipment_used(id,description)
FROM 'C:\Users\user\Desktop\Yliko\firefighting_equipment.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS env_lighting_condition(id integer PRIMARY KEY, description text);
COPY env_lighting_condition(id,description)
FROM 'C:\Users\user\Desktop\Yliko\env_lighting_condition.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS dui_narcotics(id integer PRIMARY KEY, description text);
COPY dui_narcotics(id,description)
FROM 'C:\Users\user\Desktop\Yliko\dui_narcotics.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS collision_with_animal( id integer PRIMARY KEY, description text);
COPY collision_with_animal(id,description)
FROM 'C:\Users\user\Desktop\Yliko\collision_with_animal.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS accident_cadas_type( id integer PRIMARY KEY, description text);
COPY accident_cadas_type(id,description)
FROM 'C:\Users\user\Desktop\Yliko\accident_cadas_type.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS accident_severity( id integer PRIMARY KEY, description text);
COPY accident_severity(id,description)
FROM 'C:\Users\user\Desktop\Yliko\accident_severity.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS accident_related_factor( id integer PRIMARY KEY, description text);
COPY accident_related_factor(id,description)
FROM 'C:\Users\user\Desktop\Yliko\accident_related_factor.csv'
DELIMITER ','
CSV HEADER; -- Accident

CREATE TABLE IF NOT EXISTS vehicle_type( id integer PRIMARY KEY, description text);
COPY vehicle_type(id,description)
FROM 'C:\Users\user\Desktop\Yliko\vehicle_csv_renamed\vehicle_type.csv'
DELIMITER ','
CSV HEADER; -- Vehicle

CREATE TABLE IF NOT EXISTS vehicle_fire( _id integer PRIMARY KEY, description text);
COPY vehicle_fire(_id,description)
FROM 'C:\Users\user\Desktop\Yliko\vehicle_csv_renamed\vehicle_fire.csv'
DELIMITER ','
CSV HEADER; -- Vehicle

CREATE TABLE IF NOT EXISTS vehicle_collision_type( id integer PRIMARY KEY, description text);
COPY vehicle_collision_type(id,description)
FROM 'C:\Users\user\Desktop\Yliko\vehicle_csv_renamed\vehicle_collision_type.csv'
DELIMITER ','
CSV HEADER; -- Vehicle

CREATE TABLE IF NOT EXISTS vehicle_trailer( id integer PRIMARY KEY, description text);
COPY vehicle_trailer(id,description)
FROM 'C:\Users\user\Desktop\Yliko\vehicle_csv_renamed\trailer.csv'
DELIMITER ','
CSV HEADER;--car //accident

CREATE TABLE IF NOT EXISTS road_speed_bump( id integer PRIMARY KEY, description text);
COPY road_speed_bump(id,description)
FROM 'C:\Users\user\Desktop\Yliko\speed_bump.csv'
DELIMITER ','
CSV HEADER;--Address

CREATE TABLE IF NOT EXISTS road_traffic_signal_control( id integer PRIMARY KEY, description text);
COPY road_traffic_signal_control(id,description)
FROM 'C:\Users\user\Desktop\Yliko\road_traffic_signal_control.csv'
DELIMITER ','
CSV HEADER;--Address

CREATE TABLE IF NOT EXISTS road_surface_contaminents( id integer PRIMARY KEY, description text);
COPY road_surface_contaminents(id,description)
FROM 'C:\Users\user\Desktop\Yliko\road_surface_contaminents.csv'
DELIMITER ','
CSV HEADER;--Address

CREATE TABLE IF NOT EXISTS road_speed_limit_type( id integer PRIMARY KEY, description text);
COPY road_speed_limit_type(id,description)
FROM 'C:\Users\user\Desktop\Yliko\road_speed_limit_type.csv'
DELIMITER ','
CSV HEADER;--Address

CREATE TABLE IF NOT EXISTS road_signing_factors( id integer PRIMARY KEY, description text);
COPY road_signing_factors(id,description)
FROM 'C:\Users\user\Desktop\Yliko\road_signing_factors.csv'
DELIMITER ','
CSV HEADER;--Address

CREATE TABLE IF NOT EXISTS road_pedestrian_infrastructure(id integer PRIMARY KEY, description text);
COPY road_pedestrian_infrastructure(id,description)
FROM 'C:\Users\user\Desktop\Yliko\road_pedestrian_infrastructure.csv'
DELIMITER ','
CSV HEADER;--Address

CREATE TABLE IF NOT EXISTS road_local_area(id integer PRIMARY KEY, description text);
COPY road_local_area(id,description)
FROM 'C:\Users\user\Desktop\Yliko\road_local_area.csv'
DELIMITER ','
CSV HEADER; --Address





-- CREATE TABLE IF NOT EXISTS accidents (
--     accident_id bigserial,
--     accident_address_id bigint,
--     user_id bigint,
--     case_id bigint,
--     accident_creation_date timestamp,
--     accident_happen_date timestamp,
--     accident_happen_day text,
--     longitude_latitude point, -- points are (x,y) where x and y are floating point integers
--     accident_severity_id integer,
--     dui_narcotics_id integer,
--     alcohol_id integer,
--     abandoned_victim_id integer,
--     collision_with_animal_id integer,
--     number_of_seperate_events integer,
--     gdv_classification integer,
--     accident_cadas_type_id integer,
--     accident_collision_event_id integer,
--     first_harmful_event_id integer,
--     most_harmful_event_id integer,
--     accident_related_factor_id integer,
--     total_vehicles_involved integer,
--     vehicles_involved_types text,
--     accident_summary text,
--     information_source_id integer,
--     information_confidence_level_id integer,
--     information_confidence_level_summary text,
--     investigation_method_id integer,
--     investigation_method_confidence_level_id integer,
--     investigation_method_confidence_level_summary text,
--     accident_images text

--     PRIMARY KEY (accident_id);
--     FOREIGN KEY (accident_address_id) REFERENCES address(address_id) on update cascade;
--     FOREIGN KEY (accident_severity_id) REFERENCES accident_severity(id) on update cascade;
--     FOREIGN KEY (dui_narcotics_id) REFERENCES dui_narcotics(id) on update cascade;
--     FOREIGN KEY (alcohol_id) REFERENCES alcohol(id) on update cascade;
--     FOREIGN KEY (abandoned_victim_id) REFERENCES abandoned_victim(id) on update cascade;
--     FOREIGN KEY (collision_with_animal_id) REFERENCES collision_with_animal(id) on update cascade;
--     FOREIGN KEY (accident_cadas_type_id) REFERENCES accident_cadas_type(_id) on update cascade;
--     FOREIGN KEY (accident_collision_event_id) REFERENCES accident_collision_event(accidentcollisionevent_id) on update cascade;
--     FOREIGN KEY (first_harmful_event_id) REFERENCES first_harmful_event(accidentcollisionevent_id) on update cascade;
--     FOREIGN KEY (most_harmful_event_id) REFERENCES most_harmful_event(accidentcollisionevent_id) on update cascade;
--     FOREIGN KEY (accident_related_factor_id) REFERENCES accident_related_factor(id) on update cascade;
--     FOREIGN KEY (information_source_id) REFERENCES information_source(informationsource_id) on update cascade;
--     FOREIGN KEY (information_confidence_level_id) REFERENCES parent_table(parent_key_columns) on update cascade;
--     FOREIGN KEY (investigation_method_id) REFERENCES parent_table(parent_key_columns) on update cascade;
--     FOREIGN KEY (investigation_method_confidence_level_id) REFERENCES parent_table(parent_key_columns) on update cascade;

-- );

-- CREATE TABLE IF NOT EXISTS address(
--     address_id bigserial,
--     address_number text,
--     lanes integer not null,
--     speed_limit integer not null,
--     road_traffic_way_flow_id integer not null,
--     road_surface_type_id integer not null,
--     roadjunction_id integer not null,
--     road_local_area_id integer not null,
--     roadway_alignment_id integer not null,

--     FOREIGN KEY (road_traffic_way_flow_id) REFERENCES road_traffic_way_flow(roadtrafficwayflow_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (roadjunction_id) REFERENCES roadjunction(roadjunction_id) on update cascade;
--     FOREIGN KEY (road_local_area_id) REFERENCES road_local_area(id) on update cascade;
--     FOREIGN KEY (roadway_alignment_id) REFERENCES roadway_alignment(roadwayalignment_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
--     FOREIGN KEY (road_surface_type_id) REFERENCES road_surface_type(roadsurfacetype_id) on update cascade;
-- );