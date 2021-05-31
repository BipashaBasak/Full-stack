A.1. Find the skills of the users where email id of the user is 'bipashabasurocks@gmail.com'.
-> SELECT
       `skills`.`name`
   FROM
      `users`, 
      `skills`
   WHERE
      `users`.`id` = `skills`.`user_id` AND
      `users`.`email` = 'bipashabasurocks@gmail.com'    

A.2. Find the skills of the user where email id of the user is 'bitanbasak112@gmail.com'.
-> SELECT
       `skills`.`name`
   FROM
      `users`,
      `skills`
   WHERE
      `users`.`id` = `skills`.`user_id` AND
      `users`.`email` = 'bitanbasak112@gmail.com'

A.3. Find the name of the user whose skill is 'HTML'. 
-> SELECT
       `users`.`name`
   FROM
      `users`,
      `skills`
   WHERE
      `users`.`id` = `skills`.`user_id` AND
      `skills`.`name` = 'HTML' 

B.4. What are the phones that 'BITAN' has.  
-> SELECT
       `products`.`name` AS `product_name`
   FROM
      `users`,
      `products`,
      `userproduct`
   WHERE
      `users`.`id` = `userproduct`.`user_id` AND
      `products`.`id` = `userproduct`.`product_id` AND
      `users`.`name` = 'BITAN'                                