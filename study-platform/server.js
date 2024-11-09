// server.js

import express from "express";
import http from "http";
import { Server } from "socket.io";

const app = express();
const server = http.createServer(app);
const io = new Server(server);

// Store chatroom users in memory (use a database in production)
let chatrooms = [];

// Handle new connections
io.on("connection", (socket) => {
    console.log("New user connected");

    // Handle joining a chatroom
    socket.on("joinRoom", (chatroomId) => {
        socket.join(chatroomId);
        console.log(`User joined chatroom: ${chatroomId}`);
    });

    // Handle sending a message
    socket.on("chatMessage", ({ chatroomId, message }) => {
        io.to(chatroomId).emit("message", message); // Broadcast message to room
    });

    // Handle disconnection
    socket.on("disconnect", () => {
        console.log("User disconnected");
    });
});

// Listen on port 3000
server.listen(3000, () => {
    console.log("Socket.io server running on port 3000");
});
