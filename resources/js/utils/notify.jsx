import React from "react";
import toast, { Toaster } from "react-hot-toast";

export const notify = (message, type = "success") => {
  type == "success"
    ? toast.success(`${message}`, {
        duration: 5000,
        style: {
          background: "#04111d",
          color: "#fff",
        },
      })
    : toast.error(`${message}`, {
        duration: 5000,
        style: {
          background: "#04111d",
          color: "#fff",
        },
      });
};

export const Notifier = () => {
  return <Toaster position="top-center" reverseOrder={false} />;
};
