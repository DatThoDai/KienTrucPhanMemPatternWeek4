import os
import time

def main():
    app_env = os.environ.get('APP_ENV', 'unknown')
    print(f"Application environment: {app_env}")
    print("Application started. Press Ctrl+C to exit.")
    
    # Keep the container running
    while True:
        time.sleep(10)
        print(f"Running in {app_env} environment...")

if __name__ == "__main__":
    main()