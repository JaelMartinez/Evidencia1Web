# Evidencia1Web
Repositorio de la evidencia 1 de Programación Web

- Nombre: Angel Jael Martinez de Escobar Araiza
- Carrera: Ingenieria en desarrollo de software
- Semestre: 6to Semestre

##Problema planteado
“Halcon” is a construction material distributor that requires a web application to automate its internal processes. After an interview, the client's needs are as follows:

A web application that allows their customers to see the status of their orders from a main screen where the customer enters a customer number, and an invoice number. The information to be displayed is the status and, in case of having a status of "Delivered", show the photo of the evidence that it was delivered. The statuses are as follows:
Ordered: when a material is ordered, and the sales executive enters it into the system.
In process: when the order is in stock, and is being prepared to go on route or, failing that, when it is not in stock and must be purchased from an external supplier.
In route: when the order has been routed for distribution.
Delivered: when the order has been delivered to the customer's premises.
The personnel working in the company can access an administrative Dashboard to carry out their respective activities. This requires the following:
That the system brings by default an administrative user, which will be able to register new users and assign roles to the users.
The roles are the departments (important: customers will not be able to register):
Sales: those in charge of taking orders from customers.
Purchasing: in case of not having any material, these are the users who manage the purchase of materials.
Warehouse: who manage the warehouse and prepare the orders for routing, they also inform Purchasing about non-existent or low stock materials.
Route: who oversee distributing orders to customers.
The life cycle of an order is respected:
A customer calls the company to place an order.
The salesperson takes the order and assigns a new entry to the platform, which must contain the following: 
Consecutive invoice number to which the order will correspond.
Name or company name of the customer placing the order.
A unique customer number to be assigned arbitrarily.
Fiscal data of the client for the filling of the physical invoice that later will be sent by e-mail (the application will not send invoices, each order is linked with an invoice number, but a person of administration oversees making the invoices separately).
Date and time of the order.
Delivery address of the order.
A field to enter any notes or extra information.
The default status that the order acquires after it is raised is “Ordered” at that time the order should be visible to all employees of the company.
A warehouse person should take care of the order and change its status to "In process". Once he/she has finished gathering the materials (internal warehouse or by arranging with purchasing the acquisition of the missing product), he/she changes the status to "In route" and, in turn, physically loads a unit together with the carrier.
The person on the route must take a photo of the loaded unit and upload it to the platform (consider that the upload photo option should only be visible to people in the Route department).
Upon delivery, the operator must take another photo of the unloaded material and upload it to the platform as evidence of delivery.
Once the material is delivered, the status changes to "Delivered".
A screen where all orders are listed, with the possibility to search for orders by Invoice Number, Customer Number, Date or Status.
When an order is accessed, it can be modified or deleted logically, it is not deleted from the database, but a status is set so that it is not displayed together with the other orders.
A screen where the deleted orders are displayed, with the possibility to edit and restore them.

## Metodologia de trabajo elegida
Metodología Ágil (Scrum):
Justificación: Scrum es ideal para este proyecto porque permite un desarrollo iterativo, feedback frecuente del cliente y flexibilidad para adaptarse a cambios en los requisitos. Dado que el proyecto implica múltiples partes interesadas y funcionalidades complejas, el enfoque incremental de Scrum ayudará a gestionar las prioridades y entregar valor de manera incremental.

## Diagramas

Aquí puedes encontrar los diferentes diagramas del proyecto:

1. ![Diagrama de ER base de datos](https://github.com/JaelMartinez/Evidencia1Web/blob/main/Diagrama%20ER%20de%20base%20de%20datos%20(pata%20de%20gallo).png?raw=true)
2. ![Diagrama de actividades](https://github.com/JaelMartinez/Evidencia1Web/blob/main/Diagrama%20de%20actividades%20(1).png?raw=true)
3. ![Diagrama de caso de uso](https://github.com/JaelMartinez/Evidencia1Web/blob/main/Diagrama%20de%20caso%20de%20uso%20(3).png?raw=true)
4. ![Diagrama de clases](https://github.com/JaelMartinez/Evidencia1Web/blob/main/Diagrama%20en%20blanco%20(2).png?raw=true)
5. ![Diagrama BPMN](https://github.com/JaelMartinez/Evidencia1Web/blob/main/image.png?raw=true)

¡Gracias por tu interés en mi proyecto!
